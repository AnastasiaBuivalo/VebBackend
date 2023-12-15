<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturerCourse extends Model
{
    protected $table = 'lecturer_course';

    protected $fillable = [
        'lecturer_id',
        'course_id',
    ];

    public function items()
    {
        return $this->hasMany(Lecturers::class, 'lecturer_id', 'id')
            ->with('lecturers');
    }

    public function courses()
    {
        return $this->hasMany(AllCourse::class, 'course_id', 'id')
        ->with('all_course');
    }

}