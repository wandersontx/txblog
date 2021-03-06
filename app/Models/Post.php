<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'content', 'slug', 'is_active', 'user_id', 'thumb'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'posts_categories');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
}
