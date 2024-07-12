<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FotosController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\EntrevistasController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', InicioController::class);

Route::get('/Fotos', [FotosController::class, 'segundo']);
Route::get('Fotos/{uno}', [FotosController::class, 'tercero']);

Route::get('/Videos', [VideosController::class, 'cuarto']);
Route::get('/Videos/{dos}', [VideosController::class, 'quinto']);

Route::controller(EntrevistasController::class)->group(function() {
    Route::get('Entrevistas', 'mintre');
    Route::get('Entrevistas/{pesca}', 'entre');
    Route::get('Entrevistas/{pesca}/{muni?}', 'vientre');
});




