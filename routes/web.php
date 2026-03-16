<?php

use Illuminate\Support\Facades\Route;

// Basic route
// Route::get('/', function () {
//     return view('welcome');
// });

// // Returns plain text
// Route::get('/hello', function () {
//     return "Hello World!";
// });

// Returns HTML
Route::get('/html', function () {
    return "<h1>Big Bold Title</h1><p>This is a paragraph</p>";
});

// Returns JSON (like an API)
Route::get('/json', function () {
    return response()->json([
        'name' => 'Alok',
        'role' => 'Developer',
        'skills' => ['Laravel', 'MongoDB', 'PHP']
    ]);
});

// Route with parameter
Route::get('/user/{id?}', function ($id) {
    return "<h1>User ID: $id</h1>";
});

// Route with multiple parameters
Route::get('/user/{id}/post/{postId}', function ($id, $postId) {
    return "<h1>User: $id | Post: $postId</h1>";
});

// table
// Route::get("/table/{num?}", function($num = 5)
// {
//     for($i=1;$i<=10;$i++){
//         echo "$num*$i = ". $num*$i . "<br>";
//      }
// })->whereNumber("num");

// student details, using multiple method
Route::get('/Student"/{sname}/{id}/{course}', function($sname, $id, $course)
{
    return "StudentName: ". $sname .
    "<br> Student Id: " .$id . 
    "<br> Course: " . $course;
})->where([
'sname' => '[a-zA-Z]', 
'id' => '[0-9]', 
'course' => '[a-zA-z] +'
]);


// fallback method
Route::fallback(function(){
    return "<h1> Page not found<h1>";
});


// named route
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/aboutus', function () {
    return view('about');
})->name("about");

Route::get('/student', function () {
    return view('student');
});