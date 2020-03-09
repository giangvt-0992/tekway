<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'name',
        'solr_id'
    ];

    public function academies()
    {
        return $this->hasMany(Academy::class);
    }
}
