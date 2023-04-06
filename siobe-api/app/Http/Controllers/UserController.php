<?php

namespace App\Http\Controllers;

use App\Filters\UsersFilter;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): UserCollection
    {
        $filter = new UsersFilter();
        $filterItems = $filter->filter($request);

        $users = User::where($filterItems)->paginate(10);
        return new UserCollection($users->appends(request()->query()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): UserResource
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);

        return new UserResource(User::create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): UserResource|JsonResponse
    {
        $validated = $request->validated();
        if (empty($validated)) {
            return response()->json(['message' => 'Not modified'], 304);
        }

        $user->update($validated);
        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        $user->delete();
        return response()->json(['message' => 'Resource deleted']);
    }
}