<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;
use App\Http\Controllers\SegundoController;
use App\Http\Controllers\TercerController;
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
Route::get('/uno/{uno?}', [PrimerController::class, 'show']);
Route::get('/dos/{dos?}', [SegundoController::class, 'show']);
Route::get('/tres/{tres?}', [TercerController::class, 'show']);