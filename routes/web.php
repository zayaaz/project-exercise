<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimaryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PrimaryController::class, 'index']);
Route::post('/postTest', [PrimaryController::class, 'postTest']);

# Poll routes
Route::get('/pollCreate', [PrimaryController::class, 'displayPollCreatePage']);
Route::post('/pollCreate', [PrimaryController::class, 'savePollOptions']);

Route::get('/poll', [PrimaryController::class, 'displayPoll']);
Route::post('/poll', [PrimaryController::class, 'submitPoll']);