<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonLearningOutcomeStoreRequest;
use App\Http\Requests\LessonLearningOutcomeUpdateRequest;
use App\Http\Resources\LessonLearningOutcomeResource;
use App\Models\LessonLearningOutcome;
use Illuminate\Http\JsonResponse;


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
	public function update(LessonLearningOutcomeUpdateRequest $request, LessonLearningOutcome $llo): LessonLearningOutcomeResource|JsonResponse
	{
		$validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

		$llo->update($request->all());
		return new LessonLearningOutcomeResource($llo);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(LessonLearningOutcome $llo)
	{
		$llo->delete();

        return response()->json(['message' => 'Resource deleted']);

	}
}
