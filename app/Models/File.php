<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class File extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    // protected $fillable = [
    //     'name',
    //     'file_path',
    //     'excel_path'
    // ];
}
