<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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
Route::get('/Student"/{sname}/{id}/{course}', function ($sname, $id, $course) {
    return "StudentName: " . $sname .
        "<br> Student Id: " . $id .
        "<br> Course: " . $course;
})->where([
    'sname' => '[a-zA-Z]',
    'id' => '[0-9]',
    'course' => '[a-zA-z] +'
]);


// fallback method
Route::fallback(function () {
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


// with method and with name method
// Route::get("/new1", function() {
//     $name =  "Alok";
//     $id  = 123;
//     return view("student")->withName($name)->withId($id);
// });


// Using compact method
// Route::get("/new/{name}/{id}", function($name, $id){
//     return view("student")->withName($name)->withId($id);
// });



// json response
Route::get("/json", function () {});

// response() function in laravel  -- it return view(html) , json , file, redirect, text , controller
// example -- simple text form

Route::get("/hi", function () {
    return response("Welcome to laravel");
});

// 2nd example
Route::get("/hii", function () {
    return response()->view('welcome');
});

// 3rd example -- json response
Route::any("/json", function () {
    return response()->json([
        "name" =>  "Alok",
        "id" => "12317981",
        "course" => "CSE",
        "email" => "abc@gmail.com"
    ]);
});

// using array
Route::get('/students', function () {
    $student = [
        "sname" => "Alok",
        "id" => "12317981",
        "course" => "CSE",
        "email" => "abc@gmail.com"
    ];
    return ($student);
});

// 4th example -- redirect
Route::any("/jsn", function () {

    return response()->redirectTo("hii");
});

Route::any("/notfound", function () {

    return response("error 404 not found", 404);
});


// header
Route::any("/header", function () {
    return response("Welcome to Laravel")
        ->header("X-Welcome-Header", "welcome to laravel");
});


// json response with headers
Route::any("/jsonheader", function () {

    return response()->json(["name" => "Alok"])
        ->header("Content Type", "application/json");
});


//  --------- COOKIE ------
Route::any("/set-cookie", function () {

    // 1.Setting cookies  - cookie()helper syntax -- cookie(name , value , time);

    $cookie = cookie("abc", "raj", 2);  //coookie helper to create a cookie
    return response("Cookie has been set")->cookie($cookie);
});

// retrival
Route::any("/get-cookie", function () {

    $username = request()->cookie("abc");
    return response("Username: " . ($username ?? "Cookie is not found"));
});

// deleting cookieee 
Route::get("/delete-cookie", function () {


    return response("Cookie deleted")
        ->cookie(cookie()->forget("abc"));
});



Route::any("/subview", function () {
    return view('admin.hello');
});

// get cookie
// Route::get('/get-cookie-facade', function(Request $request){
//    $user = $request->cookie('user');

//    if($user){
//     return "Cookie value is: ".$user;
//    }else {
//     return "Cookie is not found".$user;
//    }
// });




use App\Http\Controllers\FirstController;

Route::get("/controller", [FirstController::class, "read"]);