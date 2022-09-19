<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use App\Models\Image;
use App\Exports\ExcelTableExport;
use App\Imports\StudentInformationImport;
use App\Imports\SpaceStudentInformationImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\StudentKPI;

class StudentGraduateController extends Controller
{
   public function uploadStudentGraduates(Request $request)
   {
    Excel::import(new StudentInformationImport, $request->file('file'));
    return redirect()->route('dashboard')->with('success', 'Student Information Import Successfully');
   }

}
