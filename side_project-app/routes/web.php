<?php

use App\Http\Controllers\UI;
use App\Http\Controllers\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

//sample_signup&landing page

Route::get('/', function() { return view('welcome'); })->name('welcome');
Route::get('/temp_1', [UI::class, 'index']);
Route::get('/home', [UI::class, 'create'])->name('show');
Route::get('/temp_1', function() { return view('temp_1'); })->name('temp_1');
Route::post('/temp_1', [UI::class, 'create'])->name('create');


//insert new contents

// Route:: get('/', function(){ return view ('temp_1');});
Route:: get('/temp_3', [User::class, 'show'])->name('show');
Route:: post('/temp_3{$id}',[User::class, 'edit'])->name('edit');

// ERROR Database
Route::get('/temp_2', [User::class, 'show'])->middleware('UserAccessMiddleware');

Route::group(['middleware' => ['user.access']], function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  // Other routes that require user access
});
