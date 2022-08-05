<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use App\Models\Image;
use App\Exports\ExcelTableExport;
use App\Imports\StudentImport;
use App\Imports\SpaceStudentImport;
use Maatwebsite\Excel\Facades\Excel;

class FileController extends Controller
{
    public function fileUpload(Request $req){
        $req->validate([
            'files' => 'required',
            'files.*' => 'mimes:html,xlsx|max:2048',
        ]);

        if($req->hasfile('files'))
        {
            foreach($req->file('files') as $file)
            {
                $fileModel = new File;
                $fileId = 0;
            
                if($file->getClientmimeType() == 'text/html')
                {   

                    $string = ' ' . $file->get();
                    $ini = strpos($string, '<table border=0>');
                    $ini += strlen('<table border=0>');
                    $len = strpos($string, '</table>', $ini) - $ini;
                    $table = substr($string, $ini, $len);
                    $table = substr($table, strpos($table, '</tr>')+5);
                    $table = str_replace(' &nbsp;', '', $table);
                    $table = preg_replace("/<\/?a( [^>]*)?>/i", "", $table);
//remove all anchor tag
                    $fileName = $file->getClientOriginalName();
//set fileName
                    $tFileName = time().'_'.$fileName;
                    $filePath = $file->storeAs('uploads', $tFileName, 'public');
//set filePath and store the uploaded file to upload folder
                    $htmlTablePath = 'public/html_tables/'.$tFileName;
//set path for html table
                    Storage::disk('local')->put($htmlTablePath, $table);
//store html table
                    $excelPath = substr('public/excels/'.$tFileName, 0, -5);
//excel path            
                    Excel::store(new ExcelTableExport($table), $excelPath.'.xlsx');
//store converted excel file but path?
                    $fileModel->name = $fileName;
//get fileNam to be saved in db
                    $fileModel->file_path = 'public/'.$filePath;
                    $fileModel->html_table_path = $htmlTablePath;
                    $fileModel->excel_path = $excelPath;
                    $fileModel->user_id = Auth()->id();
                    $fileModel->save();
                    $fileId = File::latest('created_at')->first()->id;
                    Excel::import(new StudentImport($fileId), $excelPath.'.xlsx');
                    usleep( 1000000 );  
                }
                else
                {
                    // dd($file);
                    $fileName = $file->getClientOriginalName();
                    $tFileName = time().'_'.$fileName;
                    $filePath = $file->storeAs('uploads', $tFileName, 'public');
                    $fileModel->name = $fileName;
                    $fileModel->file_path = 'public/'.$filePath;
                    $fileModel->user_id = Auth()->id();
                    $fileModel->save();
                    $fileId = File::latest('created_at')->first()->id;
                    Excel::import(new SpaceStudentImport($fileId), $file);
                    usleep( 1000000 );
                }
            }
        }
        
        return back()
            ->with('success','File has been uploaded.');
    }


    public function imageUpload(Request $req){
        $req->validate([
            'files' => 'required',
            'files.*' => 'mimes:jpeg,png',
        ]);

        if($req->hasfile('files'))
        {
            foreach($req->file('files') as $file)
            {
                $imageModel = new Image;

                $imageName = $file->getClientOriginalName();
                $tImageName = time().'_'.$imageName;
                $imagePath = $file->storeAs('images', $tImageName, 'public');
                $imageModel->name = $imageName;
                $imageModel->image_path = 'storage/'.$imagePath;
                $imageModel->save();
                usleep( 1000000 );  
            }
        }
        
        return back()
            ->with('success','Image has been uploaded.');
    }

    public function postDelete(Request $req)
    {
        $files = File::whereIn('id', $req->get('files'))->get();

        foreach ($files as $file) {
            $file->delete();
        }

        return back()
            ->with('success','File has been deleted.');
    }

    public function postImageDelete(Request $req)
    {
        $images = Image::whereIn('id', $req->get('images'))->get();

        foreach ($images as $image) {
            $image->delete();
        }

        return back()
            ->with('success','Image has been deleted.');
    }
}