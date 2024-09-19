<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PersonalId;

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
Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::group(['prefix' => 'PersonalId'], function() {
        Route::get('/', 'PersonalIdController@index');
        Route::get('/{id}', 'PersonalIdController@show');
        Route::post('/', 'PersonalIdController@store');
        Route::put('/{id}', 'PersonalIdController@update');
        Route::delete('/{id}', 'PersonalIdController@destroy');
    });});
