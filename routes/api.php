<?php

use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::controller(UserController::class)->group(function (){
    Route::get('/usuarios', 'index');
    Route::post('/usuario', 'register');
    Route::get('/usuario/{id}', 'list_users');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}', 'delete');
});

