<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('index');
});


Route::get('/pengadaan', function () {
    return view('pengadaan');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin', [bukuController::class, 'create'])->name('data_buku');

Route::post('/admin',[bukuController::class,'store'])->name('data_buku');

