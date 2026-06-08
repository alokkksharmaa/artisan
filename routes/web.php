<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CourseController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/courses', [CourseController::class, 'index'])
        ->name('courses.index');

    Route::get('/courses/{id}', [CourseController::class, 'show'])
        ->name('courses.show');

});