<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonLearningOutcomeStoreRequest;
use App\Http\Resources\LessonLearningOutcomeResource;
use App\Models\Faculty;
use App\Models\LessonLearningOutcome;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class LessonLearningOutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
			$llo = LessonLearningOutcome::paginate(10);
			return LessonLearningOutcomeResource::collection($llo);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LessonLearningOutcomeStoreRequest $llo): LessonLearningOutcomeResource
    {
        $validated = $llo->validated();

		return new LessonLearningOutcomeResource(LessonLearningOutcome::create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(LessonLearningOutcome $llo): LessonLearningOutcomeResource
    {
        return new LessonLearningOutcomeResource($llo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
 
    }
}
