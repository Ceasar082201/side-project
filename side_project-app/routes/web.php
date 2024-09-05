<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\all_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('temp_1');});
Route::post('/',[all_controller::class, 'create'])->name('user.create');
Route::get('/welcome', function () { return view('welcome');})->name('home');

Route::get('/task', [TaskController::class, 'index']);
Route::post('/task', [TaskController::class, 'store'])->name('task.store');