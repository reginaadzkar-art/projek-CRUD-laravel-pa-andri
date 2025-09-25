<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SessionController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
   
Route::resource('departemen', DepartemenController::class)->middleware('inilogin');
Route::resource('karyawan', KaryawanController::class)->middleware('inilogin'); 

Route::get('/login',[SessionController::class,'index'])->middleware('initamu');
Route::get('sesi',[SessionController::class,'index'])->middleware('initamu');
Route::post('/sesi/login',[SessionController::class,'login'])->middleware('initamu');
Route::get('/sesi/logout',[SessionController::class,'logout']);

Route::get('/',[SessionController::class,'index'])->middleware('initamu');
?>