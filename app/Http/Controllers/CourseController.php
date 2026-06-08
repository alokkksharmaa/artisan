<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $courses = [
        [
            'id' => 1,
            'course' => 'PHP'
        ],
        [
            'id' => 2,
            'course' => 'JavaScript'
        ],
        [
            'id' => 3,
            'course' => 'Python'
        ]
    ];

    // List all courses
    public function index()
    {
        return view('courses.list', [
            'courses' => $this->courses
        ]);
    }

    // Display a single course by ID
    public function show($id)
    {
        $course = collect($this->courses)->firstWhere('id', $id);

        if (!$course) {
            return redirect()->route('admin.courses.index');
        }

        return view('courses.show', compact('course'));
    }
}