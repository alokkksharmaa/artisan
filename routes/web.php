<!-- myapp/routes/web.php -->

<?php 

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
    echo("Hi");
});


// direct method to fetch the view
Route::view('/welcome', "welcome");

Route::get("/table" , function()  {
    return view('table');
});