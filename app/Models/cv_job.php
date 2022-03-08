<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv_job extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'company',
        'location',
        'date_period'
    ];
}
