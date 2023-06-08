<?php

namespace App\Http\Controllers;

use App\Filters\CriteriaLevelsFilter;
use App\Http\Requests\StoreCriteriaLevelRequest;
use App\Http\Resources\CriteriaLevelCollection;
use App\Models\Criteria;
use App\Models\CriteriaLevel;
use App\Models\Rubric;
use App\Http\Requests\UpdateCriteriaLevelRequest;
use App\Http\Resources\CriteriaLevelResource;
use Illuminate\Http\Request;

class CriteriaLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Rubric $rubric, Criteria $criteria, CriteriaLevel $criteria_level)
    {
        $filterItems = [];

        if (empty(!$request->query())) {
            $filter = new CriteriaLevelsFilter();
            $filterItems = $filter->filter($request);
        }

        $criteria_level = $criteria_level->where($filterItems)->paginate(10);
        return new CriteriaLevelCollection($criteria_level->appends(request()->query()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCriteriaLevelRequest $request, Rubric $rubric, Criteria $criteria)
    {
        $validated = $request->validated();

        $criteria_level = new CriteriaLevel;
        $criteria_level->criteria_id = $criteria->id;
        $criteria_level->title = $validated['title'];
        $criteria_level->description = $validated['description'];
        $criteria_level->point = $validated['point'];
        $criteria_level->save();
        
        return new CriteriaLevelResource($criteria_level);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rubric $rubric, Criteria $criteria, CriteriaLevel $criteria_level)
    {
        return new CriteriaLevelResource($criteria_level);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCriteriaLevelRequest $request,Rubric $rubric, Criteria $criteria, CriteriaLevel $criteria_level)
    {
        $validated = $request->validated();
        $criteria_level->update($validated);
        return new CriteriaLevelResource($criteria_level);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rubric $rubric, Criteria $criteria, CriteriaLevel $criteria_level)
    {
        $criteria_level->delete();
        return response()->json([
            'message' => 'Successfully Deleted'
        ]);
    }
}
