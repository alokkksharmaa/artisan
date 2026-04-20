<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf|max:2048'
        ]);

        // store file
        $path = $request->file('file')->store('uploads', 'public');

        return back()->with('success', 'File uploaded successfully!');
    }
}

