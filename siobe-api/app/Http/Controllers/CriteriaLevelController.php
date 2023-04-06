<?php

namespace App\Http\Controllers;

use App\Filters\CriteriaLevelsFilters;
use App\Http\Resources\CriteriaLevelCollection;
use App\Models\Criteria;
use App\Models\CriteriaLevel;
use App\Models\Rubric;
use App\Http\Requests\UpdateCriteriaLevel;
use App\Http\Resources\CriteriaLevelResource;
use Illuminate\Auth\Events\Validated;
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
            $filter = new CriteriaLevelsFilters();
            $filterItems = $filter->filter($request);
        }

        $criteria_level = $criteria_level->where($filterItems)->paginate(10);
        return new CriteriaLevelCollection($criteria_level->appends(request()->query()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Rubric $rubric, Criteria $criteria)
    {
        //
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
    public function update(UpdateCriteriaLevel $request, CriteriaLevel $id)
    {
        $validated = $request->validated();
        $id->update($validated);
        return new CriteriaLevelResource($id);
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
