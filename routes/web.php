<?php

use Illuminate\Support\Facades\Route;

// Redirige la raíz a /bio/information
Route::redirect('/', '/bio/information');

// Opcional: que /information funcione también
Route::view('/information', 'bio.information')->name('information');

// Grupo /bio
Route::prefix('bio')->group(function () {
    Route::view('information',   'bio.information')->name('bio.information');
    Route::view('infancia',      'bio.infancia')->name('bio.infancia');
    Route::view('adolescencia',  'bio.adolescencia')->name('bio.adolescencia');
    Route::view('actualidad',    'bio.actualidad')->name('bio.actualidad');
    Route::view('aspiraciones',  'bio.aspiraciones')->name('bio.aspiraciones');
});
