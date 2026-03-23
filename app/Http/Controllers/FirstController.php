<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function read()
    {
        return "hello world <br> my first basic controller";
    }
}