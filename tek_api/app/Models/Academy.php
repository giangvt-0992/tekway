<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $table = 'academies';
    protected $fillable = [
        'name',
        'description',
        'price_range',
        'url',
        'status',
        'thumbnail',
        'schedule',
        'address'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function collections()
    {
        return $this->morphMany(Collection::class, 'collectionable');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
