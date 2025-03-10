<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'lastname',
        'register',
        'email',
        'password',
        'position',
        'gender'
    ];
}
