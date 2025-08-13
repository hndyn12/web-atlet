<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'name',
        'atlet_id',
        'sport_id',
        'year',
        'level'
    ];

    public function atlet()
    {
        return $this->belongsTo(Atlet::class);
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
}
