<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'url'
    ];

    public function collections()
    {
        return $this->morphedByMany(Collection::class, 'imageable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'imageable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    
    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}
