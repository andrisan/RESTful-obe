<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\StudyProgram;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\CourseCollection;

class CourseController extends Controller
{
    //Menampilkan seluruh data
    public function index(Request $request, Course $course)
    {
        $Course = $course->with('studyProgram')->get();
        return new CourseCollection($Course);
    }
    
    //Menampilkan data berdasarkan id
    public function show(StudyProgram $studyProgram, Course $course)
    {
        $course->load('studyProgram');
        return new CourseResource($course);
    }

    //Menambahkan data
    public function store(StoreCourseRequest $request): CourseResource
    {
        $validated = $request->validated();
        return new CourseResource(Course::create($validated));
    }


    //Mengupdate data berdasarkan id
    public function update(UpdateCourseRequest $request, Course $course): CourseResource|JsonResponse
    {
        $validated = $request->validated();

        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $course->update($validated);
        return new CourseResource($course);
    }

    //Menghapus data
    public function destroy(Course $course): JsonResponse
    {
        $course->delete();
        return response()->json(['message' => 'Resource deleted']);
    }
}
