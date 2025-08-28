<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('departemen', DepartemenController::class);
