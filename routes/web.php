<?php

use App\Models\Sport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;

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

Route::get('/', function () {
    return view('accueil');
})->name('home');

Route::get('/account', function () {
    return view('account');
});

Route::get('/calendrier', function () {
    return view('calendrier');
});

Route::get('/venues', function () {
    return view('venues');
});


Route::get('/billets', function () {
    return view('billets');
});

Route::get('/register', [MyController::class, 'createForm'])->name('createLogin');
Route::post('/affiche', [MyController::class, 'create'])->name('register');

Route::get('/login', [MyController::class, 'formLogin']);
Route::post('/login', [MyController::class, 'connecter'])->name('login');

Route::get('/compte', [MyController::class, 'auth.account'])->name('account');

Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/billets', [MyController::class, 'aff_billets']);

Route::view('/home','home')->middleware('auth');
