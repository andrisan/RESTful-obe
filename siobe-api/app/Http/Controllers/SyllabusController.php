<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSyllabusRequest;
use App\Http\Requests\UpdateSyllabusRequest;
use App\Http\Resources\SyllabusResource;
use App\Models\Syllabus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(syllabus $syllabus)
    {
        return syllabusResource::collection($syllabus->paginate(10));
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Syllabus $syllabus)
    {
        $syllabus->load('studyProgram');
        return new SyllabusResource($syllabus);
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSyllabusRequest $request): SyllabusResource
    {
        $validated = $request->validated();
        return new SyllabusResource(Syllabus::create($validated));
    }

    public function update(UpdateSyllabusRequest $request, Syllabus $syllabus): SyllabusResource|JsonResponse
    {
        $validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $syllabus->update($validated);
        return new SyllabusResource($syllabus);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syllabus $syllabus)
    {
        $syllabus->delete();
        return response()->json([
            'message' => 'Resource deleted'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

}