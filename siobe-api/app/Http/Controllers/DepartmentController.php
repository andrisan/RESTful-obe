<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\DepartmentStoreRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\DepartmentCollection;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Department $Department)
    {
        $department = $Department->with('faculty')->get();
        return new DepartmentCollection($department);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentStoreRequest $request): DepartmentResource
    {
        $validated = $request->validated();

        return new DepartmentResource(Department::create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty, Department $department)
    {
        $department->load('faculty');
        return new DepartmentResource($department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentUpdateRequest $request, Faculty $faculty, Department $department): DepartmentResource|JsonResponse
    {
        $validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $department->update($validated);
        return new DepartmentResource($department);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty, Department $department): JsonResponse
    {
        $department->delete();
        return response()->json(['message' => 'Resource deleted']);
    }
}
