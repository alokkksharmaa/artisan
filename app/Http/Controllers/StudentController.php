<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    //using query builder
    public function showuser()
    {
        $users = DB::table('students')->get();
        return view("student", ['data' => $users]);
    }

    public function singleuser(string $id)
    {
        $users = DB::table('students')->where('id', $id)->get();
        return $users;
    }
    //using ORM method
    public function show()
    {
        $students = Student::all();
        return $students;
    }
}
