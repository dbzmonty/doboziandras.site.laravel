<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv_course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course',
        'platform'
    ];


}
