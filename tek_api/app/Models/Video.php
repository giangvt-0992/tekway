<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = [
        'url'
    ];

    public function collections()
    {
        return $this->morphedByMany(Collection::class, 'videoable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'videoable');
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
