<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = ['name', 'description', 'code'];
    public function atlets()
    {
        return $this->hasMany(Atlet::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function coachs()
    {
        return $this->hasMany(coach::class);
    }

    public function sport()
    {
        return $this->belongsTo(\App\Models\Sport::class, 'sport_id');
    }
}
