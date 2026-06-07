<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class UserInfoController extends Controller
{
    public function create()
    {
        return view('userinfo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[A-Za-z ]+$/',
            'age' => 'required|integer|min:18',
            'language' => 'required|in:PHP,JavaScript,Python',
        ]);

        UserInfo::create([
            'name' => $request->name,
            'age' => $request->age,
            'language' => $request->language,
        ]);

        return redirect()->route('users.list');
    }

    public function index()
    {
        $users = UserInfo::all();

        return view('records', compact('users'));
    }
}