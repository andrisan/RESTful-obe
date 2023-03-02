<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class UserController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show($id)
{
    $users = User::findOrFail($id);
    return response()->json([
    'status' => 'Success',
    'message' => 'all users grabbed',
    'data' => [
    'users' => $users,
    ]
    ],200);
    }
}

