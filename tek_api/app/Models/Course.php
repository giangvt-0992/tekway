<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'name',
        'description',
        'price',
        'number_perople',
        'validity',
        'lessons',
        'duration',
        'thumbnail',
        'url'
    ];

    public function academy()
    {
        return $this->belongsTo(Academy::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
