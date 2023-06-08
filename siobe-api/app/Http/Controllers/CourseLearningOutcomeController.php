<?php

namespace App\Http\Controllers;

use App\Filters\CourseLearningOutcomeFilter;
use App\Http\Requests\StoreCourseLearningOutcomesRequest;
use App\Http\Requests\UpdateCourseLearningOutcomesRequest;
use App\Http\Resources\CourseLearningOutcomeCollection;
use App\Http\Resources\CourselearningOutcomeResource;
use App\Models\CourseLearningOutcome;
use App\Models\Syllabus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourseLearningOutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): CourseLearningOutcomeCollection
    {
        $filter = new CourseLearningOutcomeFilter();
        $filterItems = $filter->filter($request);

        $clo = CourseLearningOutcome::where($filterItems)->paginate(10);
        return new CourseLearningOutcomeCollection($clo->appends(request()->query()));
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
    public function store(StoreCourseLearningOutcomesRequest $request, Syllabus $syllabus)
    {
        $validate = $request->validated();
        $newPosition = $syllabus->courseLearningOutcomes()->max('position') + 1;
        $validate['position'] = $newPosition;
        return new CourseLearningOutcomeResource($syllabus->courseLearningOutcomes()->create($validate));
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseLearningOutcome $clo): CourselearningOutcomeResource
    {
        return new CourseLearningOutcomeResource($clo);
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
    public function update(UpdateCourseLearningOutcomesRequest $request, CourseLearningOutcome $clo): CourseLearningOutcomeResource|JsonResponse
    {
        $validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }
        $clo->update($validated);
        return new CourseLearningOutcomeResource($clo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseLearningOutcome $clo)
    {
        $clo->delete();
        return response()->json([
            'message' => 'Resource deleted'
        ]);
    }
}
