<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        // initialization logic only
        $this->middleware('auth');
    }

    public function show()
    {
        return "Hello World";
    }
}


?>