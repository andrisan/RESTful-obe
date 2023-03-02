<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use Illuminate\Http\Request;

class RubricController extends Controller
{
    public function index(Rubric $rubric)
    {
        try {
            $data = $rubric->all();
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'messagae' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
