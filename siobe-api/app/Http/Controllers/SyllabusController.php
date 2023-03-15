<?php

namespace App\Http\Controllers;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Syllabus::findOrFail($id);
        $data->update($request->all());

        return response()->json([
            'message' => 'data updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syllabus $id)
    {
        $id->delete();
        return response()->json([
            'message' => 'Resource deleted'
        ]);
    }
}
