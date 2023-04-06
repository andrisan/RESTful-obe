<?php

namespace App\Http\Controllers;

use App\Models\Syllabus;
use App\Models\LearningPlan;
use Illuminate\Http\Request;
use App\Http\Requests\LearningPlanStoreRequest;
use App\Http\Requests\LearningPlanUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\LearningPlanResource;
use App\Http\Resources\LearningPlanCollection;

class LearningPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, LearningPlan $learningPlan)
    {
        $LearningPlan = $learningPlan->with('syllabus')->paginate(10);
        return new LearningPlanCollection($LearningPlan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LearningPlanStoreRequest $request): LearningPlanResource
    {
        dd($request);
        $validated = $request->validated();

        return new LearningPlanResource(LearningPlan::create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(Syllabus $syllabus, LearningPlan $learningPlan)
    {
        $learningPlan->load('syllabus');
        return new LearningPlanResource($learningPlan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LearningPlanUpdateRequest $request, Syllabus $syllabus, LearningPlan $learningPlan)
    {
        $validated= $request->validated();
        if(empty($validated)){
            return response()->json(['message'=> 'Not modified'], 304);
        }
        $learningPlan->update($request->all());
        return new LearningPlanResource($learningPlan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syllabus $syllabus, LearningPlan $learningPlan): JsonResponse
    {
        $learningPlan->delete();
        return response()->json(['message' => 'Resource deleted']);
    }
}
