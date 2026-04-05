<?php


namespace App\Http\Controllers;


class UserController extends Controller
{
    public function index()
    {
        return "All Users";
    }

    public function show()
    {
        return "Single User";
    }
}
