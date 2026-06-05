<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Route;

// Route::any('/', function(){

// return Response("welcome home");
// });

// mongodb CRUD

use App\Models\Student;

Route::get('/add-student', function () {

    Student::create([
        'name' => 'Alok',
        'email' => 'alok@gmail.com',
        'age' => 21
    ]);

    return "Student Added";
});