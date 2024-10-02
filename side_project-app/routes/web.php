<?php

use App\Http\Controllers\UI;
use Illuminate\Support\Facades\Route;

//sample_signup&landing page

Route::get('/', function() { return view('welcome'); });
Route::get('/temp_1', [UI::class, 'index'])->name('temp_1');
Route::post('/temp_2', [UI::class, 'create'])->name('show');


//insert new contents

Route:: get('/', function(){ return view ('home');})->name('create');
// Route:: get();