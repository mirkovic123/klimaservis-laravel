<?php

use App\Http\Controllers\AutfController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\KlijentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);
Route::get('firma', [FirmaController::class, 'index']);
Route::get('firma/{firma}', [FirmaController::class, 'show']);
Route::get('klijent', [KlijentController::class, 'index']);
Route::get('klijent/{klijent}', [KlijentController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::delete('firma/{firma}', [FirmaController::class, 'destroy']);
    Route::post('firma', [FirmaController::class, 'store']);
    Route::post('logout', [AutfController::class, 'logout']);
});
