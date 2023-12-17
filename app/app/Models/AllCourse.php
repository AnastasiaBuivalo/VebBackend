<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllCourse extends Model
{
    protected $table = 'all_course';

    protected $fillable = [
        'title',
        'descript',
        'price',
        'duration',
        'img',
        'lecturer_id'
    ];

    public function items()
    {
        return $this->hasMany(Lecturers::class, 'lecturer_id', 'id')
            ->with('lecturers');
    }

    public function gettitle(){
        return 'title';
    }

}