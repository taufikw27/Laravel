<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[MahasiswaController::class, 'index'] )->name('mahasiswa');
Route::post('/insertdata',[MahasiswaController::class, 'tambah'])->name('tambah');

Route::get('/tampildata/{id}',[MahasiswaController::class, 'tampil'])->name('tampil');
Route::post('/updatedata/{id}',[MahasiswaController::class, 'update'])->name('update');

Route::get('/delete/{id}',[MahasiswaController::class, 'delete'])->name('delete');