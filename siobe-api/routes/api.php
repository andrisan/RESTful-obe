<?php

use App\Http\Controllers\RubricController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/rubrics', [RubricController::class, 'index']);

Route::get('faculties', [\App\Http\Controllers\FacultyController::class, 'index']);

Route::get('/showUsers', [userController::class, 'show']);
