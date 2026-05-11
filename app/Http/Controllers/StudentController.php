<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'age' => $request->age,
            'course' => $request->course,
        ]);

        return response()->json([
            'message' => 'Student created successfully',
            'data' => $student
        ]);
    }
}