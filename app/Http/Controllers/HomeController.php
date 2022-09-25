<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Image;
use App\Models\Information;
use App\Models\StudentFile;
use App\Models\StudentInformation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirectLogin()
    {
        return redirect('/login');
    }

    public function file()
    {
        $files = File::where('user_id', Auth()->id())->get();

        return view('file', compact('files'));
    }

    public function getDelete()
    {
        $files = File::where('user_id', Auth()->id())->get();

        return view('delete', compact('files'));
    }

    public function manage()
    {
        $images = Image::all();
        // dd($images);

        return view('manage', compact('images'));
    }

    public function dashboard()
    {
        $images = Image::all();

        return view('dashboard', compact('images'));
    }

    public function store(Request $req){
        dd($req->all());
        $req->validate([
            'file' => 'required|mimes:xlx,xlsx|max:2048'
        ]);
        if($req->file()) {
            $studentfile = StudentFile::create([
                "name" => time().'_'.$req->file->getClientOriginalName(),
                "file_path" => '/storage/' . $filePath,
                "user_id" =>  Auth()->id()
            ]);
            $msg = 'File has been uploaded.';
        }else{
            $msg = 'File failed to upload.';
        }

        $informations = Information::create(
            [
                'graduation_session' => $req-> graduation_session,
                'graduation_semester' => $req-> graduation_semester,
                'total_student' => $req-> total_student,
                'user_id' => $user_id,
                'formFile' => $studentfile->id
            ]
        );

        return back()
            ->with('success', $msg)
            ->with('file', $fileName);
    }

    public function fileImportExport()
    {
        return view('file-import');
    }

    public function fileExport()
    {
        return Excel::download(new ExcelStudentInformationExport, 'graduationsession.xlsx');
    }
        //     public function uploadStudentGraduates(Request $req)
        //    {
        //     $req->validate([
        //         'file' => 'required|mimes:xlx,xls|max:2048'
        //         ]);
        //         $fileModel = new File;
        //         if($req->file()) {
        //             $fileName = time().'_'.$req->file->getClientOriginalName();
        //             $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
        //             $fileModel->name = time().'_'.$req->file->getClientOriginalName();
        //             $fileModel->file_path = '/storage/' . $filePath;
        //             $fileModel->save();
        //             return back()
        //             ->with('success','File has been uploaded.')
        //             ->with('file', $fileName);
        //         }
        //     // Excel::import(new StudentInformationImport, $request->file('file')->store('temp'));
        //     // return redirect()->route('dashboard')->with('success', 'Student Information Import Successfully');
        //    }


    }
