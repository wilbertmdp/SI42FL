<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
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

Route::get('/fakultas', function () {
    $kampus="Universitas Multi Data Palembang";
    $fakultas=["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];

    return view('fakultas.index',compact('kampus','fakultas'));
});

Route::get('/prodi',[ProdiController::class, 'index'] );


Route::get('/mahasiswa/insert', [MahasiswaController::class,'insert'] );
Route::get('/mahasiswa/update', [MahasiswaController::class,'update'] );
Route::get('/mahasiswa/delete', [MahasiswaController::class,'delete'] );
Route::get('/mahasiswa/select', [MahasiswaController::class,'select'] );