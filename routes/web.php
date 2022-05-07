<?php

use App\Http\Controllers\KaryawanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/karyawan', KaryawanController::class);

// Route::get('/', [KaryawanController::class, 'index'])->name('index');
// // Create
// Route::get('tambah', [KaryawanController::class, 'add',]);
// Route::post('tambah', [KaryawanController::class, 'store'])->name('tambah');
// // Update
// Route::get('edit', [KaryawanController::class, 'edit1',]);
// Route::post('edit', [KaryawanController::class, 'update',])->name('edit');
