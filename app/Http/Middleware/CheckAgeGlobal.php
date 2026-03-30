<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAgeGlobal
{
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->query('age');

        if ($age !== null && $age < 18) {
            return response("Access Denied: Must be 18+", 403);
        }

        return $next($request);
    }
}