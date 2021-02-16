<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/message/{id}', [MessageController::class, 'get']);
Route::post('/message', [MessageController::class, 'insert']);
Route::get('/message/palindrome/{message}', [MessageController::class, 'isPalindrome']);