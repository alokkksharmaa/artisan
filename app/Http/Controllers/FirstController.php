<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Request\userRequest;
class FirstController extends Controller
{
    public function read(){

    echo  "hello world" ;
    return "my first basic contoller";

    }
}
