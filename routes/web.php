<?php

use App\Http\Controllers\general\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'view'])->name('homePage');
Route::get('/rejestracja-konta',[\App\Http\Controllers\general\RegisterPageController::class,'view'])->name('rejestracja');
Route::post('/rejestracja-konta/wysłanie',[\App\Http\Controllers\general\RegisterPageController::class,'registerUser'])->name('rejestracjaUsera');
Route::get('/logowanie',[\App\Http\Controllers\general\LoginPageController::class, 'view'])->name('login');
