<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Closure;

class CheckCountry extends Controller
{
    //
    public function handle(Request $request, Closure $next){

    $country = "India";

    if($country != "India"){
        return response("Acess Denied");
    };

    return $next($request);
    }
    
}
