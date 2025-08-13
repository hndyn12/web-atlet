<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atlet extends Model
{
    protected $fillable = [
        'name',
        'sport_id',
        'image',
        'birth',
        'gender',
        'address',
        'slug'
    ];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
}
