<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UI;
use Illuminate\Support\Facades\Route;

Route::get('/', function() { return view('welcome'); });
Route::post('/home', [UI::class, 'create'])->name('create');
Route::get('/Task', [TaskController::class, 'index'])->name('home');