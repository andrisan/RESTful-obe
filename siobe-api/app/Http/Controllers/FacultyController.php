<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Filters\UsersFilter;
use Illuminate\Http\Request;
use App\Filters\FacultyFilter;
use App\Http\Requests\FacultyStoreRequest;
use App\Http\Requests\FacultyUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\FacultyResource;
use App\Http\Resources\FacultyCollection;

class FacultyController extends Controller
{
    public function index(Request $request): FacultyCollection
    {
        $filter = new FacultyFilter();
        $filterItems = $filter->filter($request);

        $faculty = Faculty::where($filterItems)->paginate(10);
        return new FacultyCollection($faculty->appends(request()->query()));
    }

    public function store(FacultyStoreRequest $request): FacultyResource
    {
        $validated = $request->validated();

        return new FacultyResource(Faculty::create($validated));
    }

    public function show(Faculty $Faculty): FacultyResource
    {
        return new FacultyResource($Faculty);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacultyUpdateRequest $request, $id): FacultyResource|JsonResponse
    {
        
        $validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $Faculty = Faculty::find($id);
        
        $Faculty->update($validated);
        return new FacultyResource($Faculty);
        // return response()->json(['message' => 'Resource updated successfully'], 304);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $Faculty): JsonResponse
    {
        $Faculty->delete();
        return response()->json(['message' => 'Resource deleted']);
    }
}
