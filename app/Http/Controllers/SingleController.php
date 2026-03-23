<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Process request data
        $data = [
            'method' => $request->method(),
            'input' => $request->all(),
            'message' => 'Single action controller invoked successfully'
        ];

        // Return response
        return response()->json($data);
    }
}