<?php

use App\Http\Controllers\UI;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function(){
//   return view('welcome');
// });
// Route:: post('/create', [UI::class, 'create'])->name('create');

// //
// Route::get('/testview', [UI::class, 'test'])->name('home');

Route::get('/', [AuthController::class, 'showRegistrationPage'])->name('showRegistrationPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', function(){
  return view('auth.login');
});
