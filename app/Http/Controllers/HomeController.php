<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Image;
use App\Models\Information;
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

    public function store(Request $request){

        $user_id = Auth()->id();
        $informations = Information::create(
            [
                'graduation_session' => $request-> graduation_session,
                'graduation_semester' => $request-> graduation_semester,
                'total_student' => $request-> total_student,
                'user_id' => $user_id

                //'formFile' => $request-> formFile
            ]
            );




    }


}
