<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = [
        'name',
        'description',
        'url',
        'founding_date',
        'thumbnail',
        'user_id'
    ];

    public function academies()
    {
        return $this->hasMany(Academy::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
