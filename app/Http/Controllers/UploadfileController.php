<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadfileController extends Controller
{
    //
    public function uploadFile(Request $request)
    {
        echo "File Uploaded Successfully";
        $path = $request->file('file')->store('public/files');
        return $path;
    }
}

// 3 Methods to upload file in Laravel
// store, storeAs, Move   