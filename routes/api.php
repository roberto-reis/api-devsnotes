<?php

use App\Http\Controllers\NotesController;
use App\Models\Note;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/ping', function(Request $request) {
    return ['ping' => true];
});

Route::get('/notes', [NotesController::class, 'all']);
Route::get('/note/{id}', [NotesController::class, 'one']);
Route::post('/note', [NotesController::class, 'new']);
Route::put('/note/{id}', [NotesController::class, 'edit']);
Route::delete('/note/{id}', [NotesController::class, 'delete']);