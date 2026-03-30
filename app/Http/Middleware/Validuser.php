<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAge
{
    public function handle(Request $request, Closure $next): Response
    {
        // Get age from request (URL or form)
        $age = $request->age;

        if ($age >= 18) {
            return $next($request);
        }

        return response("Access Denied: Age must be 18 or above");
    }
}