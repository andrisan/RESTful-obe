<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCritreriaRequest;
use App\Http\Resources\CriteriaCollection;
use App\Http\Resources\CriteriaResource;
use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Criteria $criteria)
    {
        return new CriteriaCollection($criteria->paginate(10));
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
    public function update(UpdateCritreriaRequest $request, Criteria $criteria)
    {
        $validated = $request->validated();
        $criteria->update($validated);
        return new CriteriaResource($criteria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
