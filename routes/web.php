<?php

use App\Http\Controllers\PakarController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [PakarController::class, 'indexHome']);

Route::get('/gejala', [MasterController::class, 'indexGejala'])->name('gejala');
Route::post('/gejala/tambah', [MasterController::class, 'tambahGejala']);

Route::get('/reject', [MasterController::class, 'indexReject'])->name('reject');
Route::post('/reject/tambah', [MasterController::class, 'tambahReject']);

Route::get('/relasi', [MasterController::class, 'indexRelasi'])->name('relasi');
Route::get('/partial/modal/relasi/{reject}', [MasterController::class, 'modalEditRelasi'])->name('relasi');
Route::POST('/update/relasi/{reject}', [MasterController::class, 'updateRelasi']);


Route::get('/home/user', [MasterController::class, 'indexHome']);