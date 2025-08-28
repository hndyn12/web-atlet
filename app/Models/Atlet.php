<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atlet extends Model
{
    protected $fillable = [
        'name',
        'sport_id',
        'atlet_id',
        'image',
        'birth',
        'gender',
        'address',
        'hasil',
        'slug'
    ];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($atlet) {
            // ambil prefix dari kolom "code" di tabel sports
            $sport = Sport::find($atlet->sport_id);
            $prefix = $sport ? $sport->code : 'XX';

            // cari atlet terakhir di sport yang sama
            $lastAtlet = Atlet::where('sport_id', $atlet->sport_id)
                ->orderBy('id', 'desc')
                ->first();

            if ($lastAtlet && $lastAtlet->atlet_id) {
                // ambil nomor urut dari atlet_id terakhir
                $lastNumber = intval(substr($lastAtlet->atlet_id, strlen($prefix)));
                $number = $lastNumber + 1;
            } else {
                $number = 1;
            }

            // format 3 digit → 001, 002, dst
            $atlet->atlet_id = $prefix . str_pad($number, 3, '0', STR_PAD_LEFT);
        });
    }

    public function atlets()
    {
        return $this->hasMany(\App\Models\Atlet::class, 'sport_id');
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class, 'atlet_id');
    }
}
