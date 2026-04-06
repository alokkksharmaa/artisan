<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                "id" => 1,
                "name" => "Rahul",
                "course" => "BCA"
            ],
            [
                "id" => 2,
                "name" => "Amit",
                "course" => "MCA"
            ],
            [
                "id" => 3,
                "name" => "Priya",
                "course" => "B.Tech"
            ]
        ];

        return view('students', compact('students'));
    }

    public function show($id)
    {
        $students = [
            1 => ["name" => "Rahul", "course" => "BCA"],
            2 => ["name" => "Amit", "course" => "MCA"],
            3 => ["name" => "Priya", "course" => "B.Tech"]
        ];

        $student = $students[$id];

        return view('student-details', compact('student'));
    }
}