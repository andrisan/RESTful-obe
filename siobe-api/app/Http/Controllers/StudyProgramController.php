<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Department;
use App\Models\StudyProgram;
use App\Http\Requests\StoreStudyProgramRequest;
use App\Http\Requests\UpdateStudyProgramRequest;
use App\Http\Resources\StudyProgramResource;
use App\Http\Resources\StudyProgramCollection;


class StudyProgramController extends Controller
{
    //Menampilkan seluruh data
    public function index(Request $request, StudyProgram $studyProgram)
    {
        $StudyProgram = $studyProgram->with('department')->get();
        return new StudyProgramCollection($StudyProgram);
    }

    //Menampilkan data berdasarkan id
    public function show(Department $department, StudyProgram $studyProgram)
    {
        $studyProgram->load('department');
        return new StudyProgramResource($studyProgram);
    }

    //Menambahkan data
    public function store(StoreStudyProgramRequest $request): StudyProgramResource
    {
        $validated = $request->validated();
        return new StudyProgramResource(StudyProgram::create($validated));
    }

    //Mengupdate data berdasarkan id
    public function update(UpdateStudyProgramRequest $request, StudyProgram $studyProgram): StudyProgramResource|JsonResponse
    {
        $validated = $request->validated();

        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $studyProgram->update($validated);
        return new StudyProgramResource($studyProgram);
    }

    //Menghapus data
    public function destroy(Department $department, StudyProgram $studyProgram): JsonResponse
    {
        $studyProgram->delete();
        return response()->json(['message' => 'Resource deleted']);
    }
}
