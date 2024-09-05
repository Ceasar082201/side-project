<?php

use Illuminate\Support\Facades\Route;

Route::post('/', function () { return view('temp_1');});
Route::get('/welcome', function () { return view('welcome');});