<?php

use App\Http\Controllers\UI;
use Illuminate\Support\Facades\Route;

//sample_signup&landing page

Route::get('/', function() { return view('welcome'); })->name('welcome');
Route::get('/temp_1', [UI::class, 'index']);
Route::get('/home', [UI::class, 'create'])->name('show');
Route::get('/temp_1', function() { return view('temp_1'); })->name('temp_1');
Route::post('/temp_1', [UI::class, 'create'])->name('create');
//insert new contents

// Route:: get('/', function(){ return view ('temp_1');});
// Route:: get();