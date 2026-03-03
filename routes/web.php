<!-- myapp/routes/web.php -->

<?php 

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});