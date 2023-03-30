<?php

namespace App\Http\Controllers;

use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Http\Requests\StudentGradeStoreRequest;
use App\Http\Requests\StudentGradeUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\StudentGradeResource;
use App\Http\Resources\StudentCollection;

class StudentGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $StudentGrade = StudentGrade::all();
        return StudentGradeResource::collection($StudentGrade);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentGradeStoreRequest $request): StudentGradeResource
    {
        $validated = $request->validated();

        return new StudentGradeResource(StudentGrade::create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentGrade $StudentGrade): StudentGradeResource
    {
        return new StudentGradeResource($StudentGrade);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentGradeUpdateRequest $request, StudentGrade $studentGrade): StudentGradeResource|JsonResponse
    {
        $validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $studentGrade->update($validated);
        return new StudentGradeResource($studentGrade);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentGrade $StudentGrade): JsonResponse
    {
        $StudentGrade->delete();
        return response()->json(['message' => 'Resource deleted']);
    }
}
