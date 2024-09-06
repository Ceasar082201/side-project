<?php

use App\Http\Controllers\UI;
use Illuminate\Support\Facades\Route;

//sample_signup&landing page

Route::get('/', function() { return view('welcome'); });
// Route::post('/',[UI::class, 'store'])->name('welcome');
// Route::get('/landing', [UI::class, 'store'])->name('task');
Route::post('/temp_1', [UI::class, 'store'])->name('store');
// Route::get('/temp_1', function() { return view('create'); });