<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;

class userController extends Controller
{
    public function adduser(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:5',
            'useremail' => 'required|email',
            'userage' => "required|numeric|min:18",
            'city' => "required"
        ]);
    }
}
