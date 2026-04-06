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

    public function index()
    {
        return "Secure Dashboard from Controller";
    }

    public function show() {
        return view('welcome');
    }
};



?>