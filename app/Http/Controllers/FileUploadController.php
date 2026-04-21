<?php

namespace App\Http\Controllers;

//  FileUploadController.php

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
        $file = $request->file('file');

        // generate filename
        $fileName = time() . '_' . $file->getClientOriginalName();

        // store file
        $path = $file->storeAs('uploads', $fileName, 'public');

        // return response
        return back()->with('success', 'File uploaded successfully!');
    }
}