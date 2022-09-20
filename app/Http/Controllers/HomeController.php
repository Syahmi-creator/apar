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

        $req->validate([
            'file' => 'required|mimes:xlx,xls|max:2048'
            ]);
            $fileModel = new File;
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }

        $formFile = $fileName;
        $user_id = Auth()->id();
        $informations = Information::create(
            [
                'graduation_session' => $request-> graduation_session,
                'graduation_semester' => $request-> graduation_semester,
                'total_student' => $request-> total_student,
                'user_id' => $user_id,
                'formFile' => $formFile
            ]
            );
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
