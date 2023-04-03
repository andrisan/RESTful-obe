<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCriteriaLevel;
use App\Http\Resources\CriteriaLevelResource;
use App\Models\CriteriaLevel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CriteriaLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function update(UpdateCriteriaLevel $request, CriteriaLevel $id)
    {
        $validated = $request->validated();
        $id->update($validated);
        return new CriteriaLevelResource($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
