<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRubricRequest;
use App\Http\Requests\UpdateRubricRequest;
use App\Http\Resources\RubricResource;
use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RubricController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Rubric $rubric)
    {
        return RubricResource::collection($rubric->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRubricRequest $request): RubricResource
    {
        // return $request;
        $validated = $request->validated();
        return new RubricResource(Rubric::create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(Rubric $rubric)
    {   
        $rubric->load('criterias.criteriaLevels');
        return new RubricResource($rubric);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRubricRequest $request, Rubric $rubric)
    {
        $validated = $request->validated();
        $rubric->update($validated);
        return new RubricResource($rubric);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rubric $rubric)
    {
        $rubric->delete();
        return response()->json([
            'message' => 'Successfully Deleted'
        ]);
    }
}
