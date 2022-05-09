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

<<<<<<< HEAD
Route::middleware('auth:api')->get('/user', function (Request $request) {
=======
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
    return $request->user();
});
