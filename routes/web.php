<?php

use Illuminate\Support\Facades\Route;


Route::any('/', function () {
    return "Home";
});

Route::get('/home', function () {
    return "Hello from home";
});

Route::post('/submit-post', function () {

    return "Form Submission";
});



// DYNAMIC Routing;

Route::any('/user/{id}', function ($id) {
    return "User " . $id;
});


// MULTIPLE Routing


Route::any('user/{id}/{name}', function ($id, $name) {
    return "User id is: " . $id  . "user name is: " . $name;
});


// optional paramater
Route::get('/user/{name?}', function ($name = "Guest") {

    return $name;
});


// PASSING DATA to views

// by array
Route::get('/home', function () {

    return view('home', [
        'name' => "Alok"
    ]);
});

Route::get('/home', function () {

    return view('home', [
        'name' => 'Alok',
        'age'  => '22'
    ]);
});


// COOKIE
Route::get('/cookie', function () {

    return response("Hello")
        ->cookie("name", "Alok", 60);
});

// JSON Response

Route::get('/json', function () {

    return response()->json([
        'name' => 'Alok',
        'age' => '21'
    ]);
}); 

// Redirecting to other route

Route::get('/redirect', function() {

    return redirect('/home');
});