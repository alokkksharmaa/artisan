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

use App\Http\Controllers\EventController;

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/register/{eventId}', [EventController::class, 'register']); 


// use App\Http\Controllers\ProfileController;

Route::get('/profile/{name}', [ProfileController::class, 'show']);


use App\Http\Controllers\UserInfoController;

Route::get('/user-form',[UserInfoController::class,'create']);

Route::post('/user-store',[UserInfoController::class,'store']);

Route::get('/users',[UserInfoController::class,'index']) ->name('users.list');