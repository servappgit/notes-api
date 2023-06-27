<?php

use App\Http\Controllers\NoteController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/notes', 'App\Http\Controllers\NoteController@store');
Route::get('/notes', 'App\Http\Controllers\NoteController@index');
Route::get('/notes/{id}', 'App\Http\Controllers\NoteController@show');
