<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function files()
    {
        return $this->belongsTo(File::class);
    }

    protected $fillable = [
        'no',
        'name',
        'course',
        'program',
        'year',
        'lecturer',
        'session',
        'sem',
        'section',
        'IC',
        'matric',
        'po1',
        'po2',
        'po3',
        'po4',
        'po5',
        'po6',
        'po7',
        'po8',
        'po9',
        'po10',
        'file_id',
        'user_id'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function file(){
        return $this->hasOne(File::class, 'id', 'file_id');
    }

}


