<?php

use Illuminate\Http\Request;
use App\Http\Controllers\RandomImage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\RandomQuoteController;
use App\Http\Controllers\ScorersController;
use App\Http\Controllers\TableController;

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

Route::middleware('auth:santum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/image', [RandomImage::class, 'randomImage']);

//scorers
Route::get('/scorers/PL', [ScorersController::class, 'getPLScorers']);
Route::get('/scorers/BL1', [ScorersController::class, 'getBL1Scorers']);
Route::get('/scorers/SA', [ScorersController::class, 'getSAScorers']);
Route::get('/scorers/FL1', [ScorersController::class, 'getFL1Scorers']);
Route::get('/scorers/ELC', [ScorersController::class, 'getELCScorers']);
Route::get('/scorers/CL', [ScorersController::class, 'getCLScorers']);

//table
Route::get('/table/PL', [TableController::class, 'getPLTable']);
Route::get('/table/BL1', [TableController::class, 'getBL1Table']);
Route::get('/table/SA', [TableController::class, 'getSATable']);
Route::get('/table/FL1', [TableController::class, 'getFL1Table']);
Route::get('/table/ELC', [TableController::class, 'getELCTable']);
Route::get('/table/CL', [TableController::class, 'getCLTable']);

//games
Route::get('/games/PL', [GamesController::class, 'getPLGames']);
Route::get('/games/BL1', [GamesController::class, 'getBL1Games']);
Route::get('/games/SA', [GamesController::class, 'getSAGames']);
Route::get('/games/FL1', [GamesController::class, 'getFL1Games']);
Route::get('/games/ELC', [GamesController::class, 'getELCGames']);
Route::get('/games/CL', [GamesController::class, 'getCLGames']);

//quotes
Route::get('/quote', [RandomQuoteController::class, 'getQuote']);