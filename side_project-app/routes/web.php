<?php

use App\Http\Controllers\UI;
use Illuminate\Support\Facades\Route;

//sample_signup&landing page

Route::get('/', function() { return view('welcome'); });
Route::post('/temp_1', [UI::class, 'store'])->name('store');

//insert new contents