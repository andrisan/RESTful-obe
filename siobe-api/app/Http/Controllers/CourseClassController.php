<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\JoinClass;
use App\Http\Requests\StoreCourseClassRequest;
use App\Http\Requests\UpdateCourseClassRequest;
use App\Http\Requests\JoinCourseClassRequest;
use App\Http\Resources\CourseClassResource;
use App\Http\Resources\JoinCourseClassResource;
use App\Http\Resources\CourseClassCollection;



class CourseClassController extends Controller
{
    //Menampilkan seluruh data
    public function index(Request $request, CourseClass $class)
    {
        $CourseClass = $class->get();
        return new CourseClassCollection($CourseClass);
    }

    
    //Menampilkan data berdasarkan id
    public function show(Course $course, CourseClass $class)
    {
        $class->load('course');
        return new CourseClassResource($class);
    }

    
    //Menambahkan data
    public function store(StoreCourseClassRequest $request): CourseClassResource
    {
        $validated = $request->validated();
        return new CourseClassResource(CourseClass::create($validated));
    }

    //Mengupdate data berdasarkan id
    public function update(UpdateCourseClassRequest $request, CourseClass $courseClass): CourseClassResource|JsonResponse
    {
        $validated = $request->validated();

        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $courseClass->update($validated);
        return new CourseClassResource($courseClass);
    }

    //Menghapus data
    public function destroy(Course $course, CourseClass $courseClass): JsonResponse
    {
        $courseClass->delete();
        return response()->json(['message' => 'Resource deleted']);
    }

    //Mencari data
   public function search(Request $request, CourseClass $class)
    {
        $CourseClass = $class->with('course')->get();
        return new CourseClassCollection($CourseClass);
    }

    //join class
    public function join(JoinCourseClassRequest $request): JoinCourseClassResource
    {
        $validated = $request->validated();
        return new JoinCourseClassResource(JoinClass::create($validated));
    }

}
