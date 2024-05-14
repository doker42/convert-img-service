<?php

use App\Http\Controllers\ImageConvertController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(ImageConvertController::class)->group(function () {
    Route::group(['prefix' => 'convert'], function(){
        Route::post('/blob', 'convertBlob');
        Route::post('/file', 'convertBlob');
    });
});


