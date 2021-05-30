<?php

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

Route::middleware('auth:sanctum')->get('/teacher', function (Request $request) {
    return $request->teacher();
});

Route::middleware('auth:sanctum')->get('/student', function (Request $request) {
    return $request->student();
});

Route::middleware('auth:sanctum')->get('/classt', function (Request $request) {
    return $request->classt();
});


Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return true;
});

Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');
