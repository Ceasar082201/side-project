<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\displayController;

//AuthController's
Route::get('/', [AuthController::class, 'showRegistrationPage'])->name('showRegistrationPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', function(){
  return view('auth.login');
});
 Route::get('/displayData', [AuthController::class, 'displayData'])->name('display.displayData');

 //DisplayController's
Route::get('/displayData',[displayController::class, 'index'])->name('index');