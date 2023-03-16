<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSyllabusRequest;
use App\Http\Resources\SyllabusDetailResource;
use App\Models\Syllabus;
use Illuminate\Http\Request;


class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Syllabus::all();
        return response()->json([
            'data' => $data
        ]);
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Syllabus::with('studyProgram')->findOrFail($id);
        return new SyllabusDetailResource($data);
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'head_of_study_program' => 'required|string',
            'author' => 'required|string',
            'course_id' => 'required',
            'creator_user_id' => 'required'
        ]);

        $syllabus = new Syllabus();
        $syllabus->title = $validated['title'];
        $syllabus->head_of_study_program = $validated['head_of_study_program'];
        $syllabus->author = $validated['author'];
        $syllabus->course_id = $validated['course_id'];
        //$syllabus->creator_user_id = Auth::id();
        $syllabus->creator_user_id = $validated['creator_user_id'];
        $syllabus->save();

        return response()->json([
                 'message' => 'data added'
             ]);
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