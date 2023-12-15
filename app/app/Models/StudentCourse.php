<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $table = 'student_course';

    protected $fillable = [
        'student_id',
        'course_id',
    ];

    public function items()
    {
        return $this->hasMany(Lecturers::class, 'student_id', 'id')
            ->with('students');
    }

    public function courses()
    {
        return $this->hasMany(AllCourse::class, 'course_id', 'id')
        ->with('all_course');
    }

}