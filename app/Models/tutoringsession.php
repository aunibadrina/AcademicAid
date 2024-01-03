<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutoringsession extends Model
{
    use HasFactory;

    protected $table = 'tutoringsession';

    protected $fillable = [

        'name',
        'subject',
        'time',
        'email'
    ];
}
