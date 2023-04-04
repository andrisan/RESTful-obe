<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSyllabusRequest;
use App\Http\Resources\SyllabusResource;
use App\Models\Syllabus;
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
    public function show($id)
    {
        $data = Syllabus::with('studyProgram')->findOrFail($id);
        return new SyllabusResource($data);
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSyllabusRequest $request): SyllabusResource
    {
        $validated = $request->validated();
        return new SyllabusResource(Syllabus::create($validated));
    }

    public function update(UpdateSyllabusRequest $request, Syllabus $syllabus)
    {
        $validated = $request->validated();
        $syllabus->update($validated);
        
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