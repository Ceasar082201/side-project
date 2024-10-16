<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', [AuthController::class, 'showRegistrationPage'])->name('showRegistrationPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', function(){
  return view('auth.login');
});
 Route::get('/displayData', [AuthController::class, 'displayData'])->name('display.displayData');