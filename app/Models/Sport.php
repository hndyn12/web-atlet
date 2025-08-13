<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = ['name', 'description'];
    public function atlets()
    {
        return $this->hasMany(Atlet::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
}
