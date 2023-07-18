<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\all_studentsController;

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
Route::post('/per', [all_studentsController::class, 'per']);

Route::get('/archiveStudent', [all_studentsController::class, 'datafromStudent']);

Route::post('/insertArchivedata', [all_studentsController::class, 'insertArchivedata']);

Route::get('/getArchives', [all_studentsController::class, 'getArchives']);

Route::post('/b', [all_studentsController::class, 'insertArchive']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
