<?php

use App\Models\Achievement;
use App\Models\Atlet;
use App\Models\Sport;
use App\Models\Coach;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sport = Sport::take(4)->get();
    $coach = Coach::take(3)->get();
    $atlet = Atlet::take(3)->get();
    $achievement = Achievement::take(3)->get();
    return view('home', [
        'title' => 'HOME',
        'sports' => $sport,
        'coachs' => $coach,
        'atlets' => $atlet,
        'achievements' => $achievement,
    ]);
});

Route::get('/cabang-olahraga', function () {
    return view('cabang-olahraga', ['title' => 'CABANG OLAHRAGA']);
});

Route::get('/coach', function () {
    return view('coach', ['title' => 'DAFTAR PELATIH']);
});

Route::get('/daftar-atlet', function () {
    return view('daftar-atlet', ['title' => 'DAFTAR ATLET']);
});
Route::get('/prestasi', function () {
    return view('prestasi', ['title' => 'PRESTASI']);
});

Route::get('/atletsport/{sport}', function (Sport $sport) {
    $atlets = $sport->atlets()->get();
    return view('atletsport', [
        'title' => 'ATLET ' . strtoupper($sport->name),
        'sport' => $sport,
        'atlets' => $atlets,

    ]);
})->name('atletsport.show');

Route::get('/medals/{medal}', function ($medal) {
    $achievements = Achievement::where('medal', strtolower($medal))->get();

    return view('medals', [
        'title' => 'Prestasi Medali ' . ucfirst($medal),
        'medal' => $medal,
        'achievements' => $achievements,
    ]);
})->name('medals.show');
