<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateIntendedLearningOutcomesRequest;
use App\Models\IntendedLearningOutcome;
use App\Models\Syllabus;
use Illuminate\Http\Request;

class IntendedLearningOutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = IntendedLearningOutcome::all();
        return response()->json([
            'data' => $data
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Syllabus $syllabus)
    {
        $validateData = $request->validate([
            'code' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);
        $newPosition = $syllabus->intendedLearningOutcomes()->max('position') + 1;
        $validateData['position'] = $newPosition;

        $syllabus->intendedLearningOutcomes()->create($validateData);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = IntendedLearningOutcome::findOrFail($id);
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIntendedLearningOutcomesRequest $request, IntendedLearningOutcome $ilo)
    {
        $validated = $request->validated();
        $ilo->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IntendedLearningOutcome $ilo)
    {
        $ilo->delete();
        return response()->json([
            'message' => 'Resource deleted'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
}
