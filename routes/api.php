<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Api\EventController as ApiEventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/users', function () {

    $users = User::all();

    return response()->json($users);
});

Route::get('/events', [ApiEventController::class, 'index']);

Route::get('/events/{id}', [ApiEventController::class, 'show']);

Route::get('/tags', [ApiEventController::class, 'index']);
