<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param Collection $collection
    */

    protected $fileId;
    protected $userId;

    function __construct($fileId) {
    // function __construct($fileId, $userId) {
        $this->fileId = $fileId;
        // $this->userId = $userId;
    }

    public function model(array $row)
    {
        return new Student([
            'no' => $row[0],
            'name' => $row[1],
            'course' => $row[2],
            'program' => $row[3],
            'year' => $row[4],
            'lecturer' => $row[5],
            'session' => $row[6],
            'sem' => $row[7],
            'section' => $row[8],
            'ic' => $row[9],
            'matric' => $row[10],
            'po1' => $row[11],
            'po2' => $row[12],
            'po3' => $row[13],
            'po4' => $row[14],
            'po5' => $row[15],
            'po6' => $row[16],
            'po7' => $row[17],
            'po8' => $row[18],
            'po9' => $row[19],
            'po10' => $row[20],
            'file_id' => $this->fileId,
            'user_id' => Auth()->id()
            // 'user_id' => $this->userId,
        ]);
    }
}
