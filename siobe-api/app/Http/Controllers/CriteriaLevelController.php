<?php

namespace App\Http\Controllers;

use App\Filters\CriteriaLevelsFilters;
use App\Http\Requests\StoreCriteriaLevelRequest;
use App\Http\Requests\StoreCriteriaRequest;
use App\Http\Resources\CriteriaLevelCollection;
use App\Models\Criteria;
use App\Models\CriteriaLevel;
use App\Models\Rubric;
use App\Http\Requests\UpdateCriteriaLevel;
use App\Http\Requests\UpdateCriteriaLevelRequest;
use App\Http\Resources\CriteriaLevelResource;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

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
    public function store(StoreCriteriaLevelRequest $request, Rubric $rubric, Criteria $criteria)
    {
        $validated = $request->validated();
        return new CriteriaLevelResource(CriteriaLevel::create($validated));
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
    public function update(UpdateCriteriaLevelRequest $request, CriteriaLevel $criteria_level)
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
