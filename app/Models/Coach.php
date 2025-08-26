<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coach extends Model
{
    protected $fillable = [
        'sport_id',
        'name',
        'lisensi',
        'sertifikat',
    ];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
}
