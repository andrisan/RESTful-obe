<?php

use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\CriteriaLevelController;
use App\Http\Controllers\StudentGradeController;
use App\Http\Controllers\LearningPlanController;
use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\IntendedLearningOutcomeController;
use App\Http\Controllers\RubricController;
use App\Http\Controllers\SyllabusController;

use App\Http\Controllers\LessonLearningOutcomeController;

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


    Route::apiResource('users', UserController::class);
    Route::apiResource('faculties', FacultyController::class);

    Route::scopeBindings()->group(function () {
        Route::apiResource('rubrics', RubricController::class);
        Route::apiResource('rubrics.criterias', CriteriaController::class);
        Route::apiResource('rubrics.criterias.criteria-levels', CriteriaLevelController::class);
        Route::apiResource('student-grades', StudentGradeController::class);
        Route::apiResource('assignments', AssignmentController::class);
        Route::apiResource('llo', LessonLearningOutcomeController::class);
    });

    Route::scopeBindings()->group(function () {
        Route::apiResource('rubrics.criterias', CriteriaController::class);
        Route::apiResource('faculties.departments', DepartmentController::class);
        Route::apiResource('syllabi.learning-plans', LearningPlanController::class);
        Route::apiResource('syllabi.ilo', IntendedLearningOutcomeController::class);
    });
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
