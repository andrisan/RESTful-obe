<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */

    public function getUser()
    {
        $users = User::all();
        return response()->json([
            'status' => 'Success',
            'message' => 'all users grabbed',
            'data' => [
            'users' => $users,
            ]
            ],200);
    }
}