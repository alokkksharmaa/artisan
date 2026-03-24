<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resourceController extends Controller
{
    public function index()
{
    return view('home', [
        'name' => 'Alok'
    ]);
}

    public function create()
    {
        return "This is CREATE page";
    }

    public function store(Request $request)
    {
        return "Data STORED successfully";
    }

    public function show(string $id)
    {
        return "Showing resource with ID: " . $id;
    }

    public function edit(string $id)
    {
        return "Editing resource with ID: " . $id;
    }

    public function update(Request $request, string $id)
    {
        return "Updated resource with ID: " . $id;
    }

    public function destroy(string $id)
    {
        return "Deleted resource with ID: " . $id;
    }
}


