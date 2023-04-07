<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RubricController;
use App\Http\Controllers\SyllabusController;

use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\CourseController;



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

//StudyProgram Routes
Route::get('study-programs',[StudyProgramController::class, 'index'])->name('study-programs.index');
Route::post('study-programs',[StudyProgramController::class, 'store'])->name('study-programs.store');
Route::patch('study-programs/{study_program}', [StudyProgramController::class, 'update'])->name('study-programs.update');
Route::delete('study-programs/{study_program}', [StudyProgramController::class, 'destroy'])->name('study-programs.destroy');

//Course Routes
Route::get('courses',[CourseController::class, 'index'])->name('courses.index');
Route::get('courses/create',[CourseController::class, 'create'])->name('courses.create');
Route::post('courses',[CourseController::class, 'store'])->name('courses.store');
Route::get('courses/{course}',[CourseController::class, 'edit'])->name('courses.edit');
Route::patch('courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('study-programs.destroy');


Route::group(['middleware' => ['auth:sanctum']], function () {
   Route::apiResource('users', UserController::class);

    Route::apiResource('users', UserController::class);
    Route::apiResource('faculties',FacultyController::class);
    Route::apiResource('rubrics', RubricController::class);
    
    Route::scopeBindings()->group(function () {
        Route::apiResource('faculties.departments', DepartmentController::class);
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
