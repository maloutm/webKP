<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['name'];

    public function posts_tags()
    {
        return $this->hasMany(PostTag::class);
    }
}
