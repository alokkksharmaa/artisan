<?php

use Illuminate\Support\Facades\Route;


Route::any('/', function() {
    return "Home";
});

Route::get('/home', function() {
    return "Hello from home";
});

