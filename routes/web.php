<?php

use App\Http\Controllers\CarController;
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

Route::get('/', [CarController::class, 'index'])->name('index');
Route::get('/create', [CarController::class, 'create'])->name('create');
Route::post('/save', [CarController::class, 'store'])->name('store');
Route::get('/show/{id}', [CarController::class, 'show'])->name('show');
Route::put('/update/{id}', [CarController::class, 'update'])->name('update');
Route::delete('/delete', [CarController::class, 'destroy'])->name('delete');
