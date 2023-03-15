<?php

use App\Http\Controllers\RubricController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('users', UserController::class);
});

Route::post('register-device', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (!Auth::attempt($credentials)) {
        abort(401, 'The provided credentials are incorrect.');
    }

    $token = Auth::user()->createToken($request->device_name)->plainTextToken;
    return response()->json([
        'message' => 'Device registered successfully.',
        'token' => $token
    ]);
});

Route::get('/rubricdelete/{rubric}', [RubricController::class, 'destroy']);
Route::get('rubricshow/{rubric}', [RubricController::class, 'show']);
