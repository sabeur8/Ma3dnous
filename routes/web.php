<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorruptionController;

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
Route::get('/corruption-politique', [CorruptionController::class,'politique'])->name('politique');
Route::get('/corruption-education',[CorruptionController::class,'education'])->name('education');
Route::get('/corruption-sante', [CorruptionController::class,'sante'])->name('sante');
// ... d'autres routes pour d'autres types de corruption
