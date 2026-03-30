<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAge
{
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->route('age');

        if ($age === null) {
            return response("Age parameter is missing", 400);
        }

        if ($age >= 18) {
            return $next($request);
        }

        return response("Access Denied: Age must be 18 or above", 403);
    }
}