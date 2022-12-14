<?php

use App\Http\Controllers\PrawitamaController;
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

Route::get('/', [PrawitamaController::class,'index']);
Route::get('/sejarah', [PrawitamaController::class, 'info']);
Route::get('/about', [PrawitamaController::class, 'about']);
Route::get('/pramuka', [PrawitamaController::class, 'scout']);
Route::get('/contact', [PrawitamaController::class, 'contact']);
Route::get('/dashboard', [PrawitamaController::class, 'admin'])->name('dashboard.index');
