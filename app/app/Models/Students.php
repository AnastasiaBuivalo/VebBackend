<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'fcs',
        'user_id',
        'information'
    ];

    public function items()
    {
        return $this->hasMany(Users::class, 'user_id', 'id')
            ->with('users');
    }

}