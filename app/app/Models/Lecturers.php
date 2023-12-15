<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    protected $table = 'lecturers';

    protected $fillable = [
        'fcs',
        'information',
        'speciality',
        'experience',
        'user_id'
    ];

    public function items()
    {
        return $this->hasMany(Users::class, 'user_id', 'id')
            ->with('users');
    }

}