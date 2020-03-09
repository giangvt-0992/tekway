<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'collections';
    protected $fillable = [
        'name'
    ];

    public function collectionable()
    {
        return $this->morphTo();
    }

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    public function videos()
    {
        return $this->morphToMany(Video::class, 'videoable');
    }
}
