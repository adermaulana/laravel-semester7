<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

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


//HalamanHome
Route::get('/', function(){
    return view('home');
});

//InputBank
Route::get('/hasil-bank',[BankController::class,'index'])->middleware('middlewareku');
Route::get('/input-bank',[BankController::class,'inputbank']);
Route::post('/input-bank',[BankController::class,'prosesinputbank']);
Route::get('/edit-bank/{id}',[BankController::class,'editbank']);
Route::put('/edit-bank/{id}',[BankController::class,'updatebank']);
Route::delete('/delete-bank/{id}',[BankController::class,'destroy']);

//Registrasi
Route::get('/registrasi', [RegistrasiController::class,'index'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class,'store']);

//login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


//Illegal
Route::get('/ilegal-page',function(){
    return view('illegal-page');
});
