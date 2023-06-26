<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssignmentPlanResource;
use App\Models\AssignmentPlan;
use Illuminate\Http\Request;

class AssignmentPlanController extends Controller
{
    //
    public function index()
	{
		$assignmentPlan = AssignmentPlan::paginate(10);
		return AssignmentPlanResource::collection($assignmentPlan);
	}

	public function show(AssignmentPlan $assignmentPlan): AssignmentPlanResource
    {
        return new AssignmentPlanResource($assignmentPlan);
    }
}
