<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kernel extends Controller
{
    //
    protected $routeMiddleware = [
        'check.country' => \App\Http\Middleware\CheckCountry::class,
    ];
    
}
