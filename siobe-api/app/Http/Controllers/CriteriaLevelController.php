<?php

namespace App\Http\Controllers;

use App\Http\Resources\CriteriaLevelCollection;
use App\Models\Criteria;
use App\Models\CriteriaLevel;
use App\Models\Rubric;
use Illuminate\Http\Request;

class CriteriaLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Rubric $rubric, Criteria $criteria, CriteriaLevel $criteria_level)
    {
        return new CriteriaLevelCollection($criteria_level->paginate(10));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rubric $rubric, Criteria $criteria, CriteriaLevel $criteria_level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rubric $rubric, Criteria $criteria, CriteriaLevel $criteria_level)
    {
        //
    }
}
