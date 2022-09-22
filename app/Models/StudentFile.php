<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentFile extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function students()
    {
        return $this->hasMany(StudentInformation::class, 'formFile', 'name');
    }
}
