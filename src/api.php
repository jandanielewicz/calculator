<?php

use Illuminate\Support\Facades\Route;
use \Jandanielewicz\Calculator\CalculatorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/Route::prefix('api')->group(function () {

    Route::get('/add/{a}/{b}', [CalculatorController::class, 'add']);
    Route::get('/substract/{a}/{b}', [CalculatorController::class, 'substract']);
    Route::get('/multiply/{a}/{b}', [CalculatorController::class, 'multiply']);
    Route::get('/divide/{a}/{b}', [CalculatorController::class, 'divide']);

});

