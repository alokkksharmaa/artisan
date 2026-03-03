<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello/{name}', function ($name) {
    return "Hello " . $name;
});