<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignmentStoreRequest;
use App\Http\Requests\AssignmentUpdateRequest;
use App\Http\Resources\AssignmentResource;
use Illuminate\Http\JsonResponse;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */

	public function index()
	{
		$assignment = Assignment::all();
		return AssignmentResource::collection($assignment);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(AssignmentStoreRequest $request): AssignmentResource
	{
		$validated = $request->validated();

		return new AssignmentResource(Assignment::create($validated));
	}

	/**
	 * Display the specified resource.
	 */

	public function show(Assignment $Assignment) : AssignmentResource
	{

        return new AssignmentResource($Assignment);
	}


	/**
	 * Update the specified resource in storage.
	 */
	public function update(AssignmentUpdateRequest $request, Assignment $assignment): AssignmentResource|JsonResponse
	{
		$validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

		$assignment->update($request->all());
		return new AssignmentResource($assignment);
	}


	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Assignment $assignment): JsonResponse
	{
		$assignment->delete();
		return response()->json(['message' => 'Resource deleted']);
	}
}