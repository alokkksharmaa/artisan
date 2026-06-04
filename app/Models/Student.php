<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $collection = 'students';

    protected $fillable = [
        'name',
        'age'
    ];
}
