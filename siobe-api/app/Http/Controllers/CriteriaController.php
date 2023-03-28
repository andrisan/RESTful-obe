<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCriteriasRequest;
use App\Http\Requests\UpdateCritreriaRequest;
use App\Http\Resources\CriteriaCollection;
use App\Http\Resources\CriteriaResource;
use App\Models\Criteria;
use App\Models\Rubric;
use Illuminate\Auth\Events\Validated;
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
    public function store(StoreCriteriasRequest $request, Rubric $rubric): CriteriaResource
    {
        $validated = $request->validate();

        $criteria = new Criteria;
        $criteria->rubric_id = $rubric->id;
        $criteria->title = $validated['title'];
        $criteria->llo_id = $validated['llo'];
        $criteria->description = $validated['description'];
        $criteria->max_point = $validated['max_point'];
        $criteria->save();

        return new CriteriaResource($criteria);
    }

    /**
     * Display the specified resource.
     */
    public function show(Criteria $criteria)
    {
        $criteria->load('criterias.criteriaLevels');
        return new CriteriaResource($criteria);
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
    public function destroy(criteria $criteria)
    {
        $criteria->delete();
        return response()->json([
            'message' => 'Successfully Deleted'
        ]);
    }
}
