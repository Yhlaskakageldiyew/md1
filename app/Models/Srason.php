<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = [
        'id',
    ];

    public function lesson()
    {
        return $this->belongsToMany(Lesson::class);
    }
}