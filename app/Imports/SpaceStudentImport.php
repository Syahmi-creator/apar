<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SpaceStudentImport implements ToModel, WithHeadingRow
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
        // dd(substr($row['po1'], 0, -3));
        return new Student([
            'name' => $row['name'],
            'course' => $row['course'],
            'session' => $row['session'],
            'sem' => $row['sem'],
            'po1' => substr($row['po1'], 0, -3),
            'po2' => substr($row['po2'], 0, -3),
            'po3' => substr($row['po3'], 0, -3),
            'po4' => substr($row['po4'], 0, -3),
            'po5' => substr($row['po5'], 0, -3),
            'po6' => substr($row['po6'], 0, -3),
            'po7' => substr($row['po7'], 0, -3),
            'po8' => substr($row['po8'], 0, -3),
            'po9' => substr($row['po9'], 0, -3),
            'po10' => substr($row['po10'], 0, -3),
            'file_id' => $this->fileId,
            // 'user_id' => $this->userId,
        ]);
    }
}
