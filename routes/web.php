<?php

use Illuminate\Support\Facades\Route;

// Basic route
Route::get('/', function () {
    return view('welcome');
});

// Returns plain text
Route::get('/hello', function () {
    return "Hello World!";
});

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
Route::get('/user/{id}', function ($id) {
    return "<h1>User ID: $id</h1>";
});

// Route with multiple parameters
Route::get('/user/{id}/post/{postId}', function ($id, $postId) {
    return "<h1>User: $id | Post: $postId</h1>";
});

