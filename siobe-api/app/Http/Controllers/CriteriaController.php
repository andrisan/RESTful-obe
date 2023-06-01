<?php

namespace App\Http\Controllers;

use App\Filters\CriteriasFilter;
use App\Http\Requests\StoreCriteriaRequest;
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
    public function index(Request $request, Criteria $criteria)
    {
        $filterItems = [];
        
        if (!empty($request->query())) {
            $filter = new CriteriasFilter();
            $filterItems = $filter->filter($request);
        }

        $criteria = $criteria->where($filterItems)->paginate(10);
        return new CriteriaCollection($criteria->appends(request()->query()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCriteriaRequest $request, Rubric $rubric): CriteriaResource
    {
        $validated = $request->validated();

        $criteria = new Criteria;
        $criteria->rubric_id = $rubric->id;
        $criteria->title = $validated['title'];
        $criteria->llo_id = $validated['llo_id'];
        $criteria->description = $validated['description'];
        $criteria->max_point = $validated['max_point'];
        $criteria->save();

        return new CriteriaResource($criteria);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rubric $rubric, Criteria $criteria)
    {
        return new CriteriaResource($criteria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCritreriaRequest $request, Rubric $rubric, Criteria $criteria)
    {   
        $validated = $request->validated();
        $criteria->update($validated);
        return new CriteriaResource($criteria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rubric $rubric, Criteria $criteria)
    {
        $criteria->delete();
        return response()->json([
            'message' => 'Successfully Deleted'
        ]);
    }
}
