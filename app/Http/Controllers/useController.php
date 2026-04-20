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

    public function store(Request $request)
    {
        $name = $request->input('name');

        return $name;
    }
}
