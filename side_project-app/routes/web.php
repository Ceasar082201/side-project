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
Route::get('/displayData', [AuthController::class, 'displayData']);

 //DisplayController's
Route::post('/displayData',[displayController::class, 'index'])->name('display.index');
Route::post('/displayData', [displayController::class, 'store'])->name('display.store');
Route::get('/displayData/create', [displayController::class, 'create'])->name('display.create');
Route::get('/displayData/{data}', [displayController::class, 'edit'])->name('display.edit');
Route::put('/displayData/{data}', [displayController::class, 'update'])->name('display.update');
Route::get('/showData', [displayController::class, 'showDatas'])->name('display.showData');