<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'company',
        'location',
        'year_from',
        'year_to'
    ];

    public function cv_category()
    {
        return $this->belongsTo(CvCategory::class);
    }
}
