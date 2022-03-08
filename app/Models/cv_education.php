<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv_education extends Model
{
    use HasFactory;

    protected $fillable = [
        'qualification',
        'institude',
        'location',
        'date_period'
    ];


}
