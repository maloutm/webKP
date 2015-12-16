<?php

namespace App;

use App\Blog;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title','content'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function posts_tags()
    {
        return $this->hasMany(PostTag::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
