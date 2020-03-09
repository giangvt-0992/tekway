<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';
    protected $fillable = [
        'rate'
    ];

    public function academy()
    {
        $this->belongsTo(Academy::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
