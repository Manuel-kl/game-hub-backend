<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\RandomImage;
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
Route::get('/image', [RandomImage::class, 'randomImage']);

Route::get('/table', [GamesController::class, 'getTable']);
Route::get('/scorers', [GamesController::class, 'getScorers']);
Route::get('/games', [GamesController::class, 'getGames']);
Route::get('/results', [GamesController::class, 'getResults']);