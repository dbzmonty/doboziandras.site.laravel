<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'content'
    ];

    public function getHasCoverAttribute()
    {
        return $this->cover != null;
    }

    public function getCoverImageAttribute()
    {
        if ($this->has_cover)
        {
            return asset("uploads/{$this->cover}");
        }
        else
        {
            return "https://via.placeholder.com/350";
        }
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('created_at', 'desc');
    }
}
