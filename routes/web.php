<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::any('/', function () {
    return "Home";
});

Route::get('/home', function () {
    return "Hello form home";
});

Route::post('/submit-post', function () {

    return "form Submission";
});

// DYNAMIC Routing;
Route::any('/user/{id}', function ($id) {
    return "User " . $id;
});


// MULTIPLE Routing


Route::any('user/{id}/{name}', function ($id, $name) {
    return "User id is: " . $id . "user name is: " . $name;
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
        'age' => '22'
    ]);
});


// COOKIE
Route::get('/cookie', function () {

    return response("Hello")
        ->cookie("name", "Alok", 60,);
});

// JSON Response

Route::get('/json', function () {

    return response()->json([
        'name' => 'Alok',
        'age' => '21'
    ]);
});

// Redirecting to other route

Route::get('/redirect', function () {

    return redirect('/home');
});



// Controller 

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);



Route::get('/redrct', function () {

    return redirect('/home');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return "Dashboard";
    });

    Route::get('/profile', function () {
        return "Profile";
    });
});

Route::domain('admin.localhost')->group(function () {

    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
});

Route::domain('user.localhost')->group(function () {

    Route::get('/dashboard', function () {
        return "User Dasboard";
    });
});


use App\Http\Controllers\StudentController;

Route::get('/student/{id}', [StudentController::class, 'show']);

// Redirect form another route
Route::any('/home', function () {
    // return redirect()->route('dashboard');
});

use App\Http\Controllers\RedirectController;

Route::get('/go', [RedirectController::class, 'redirectMethod']);

use App\Http\Controller\EmailController;

use App\Http\Controllers\FileUploadController;

Route::get('/upload', [FileUploadController::class, 'index']);
Route::post('/upload', [FileUploadController::class, 'store'])->name('file.upload');


// routes/web.php

Route::get("/store-session", function () {
    session(['name' => "Alok"]);
    session()->put("class", "Laravel");
    echo "session has been cleared";
});

// get session



// delete and destroy the session 
Route::get("/delete-session", function () {
    session()->forget("name");
    echo "Session destroyed";
});


use Illumninate\Http\Controller\TestController;

Route::get('session-forget', function () {});



use App\Http\Controllers\SessionController;

// Route::get("/get", [SessionController]);


// localization


Route::view('/en', "welcome");


Route::get('/lang/{lang}', function ($lang) {
    app()->setLocale($lang);
    return view('welcome');
});


// UNIT:5 forms

use App\Http\Controllers\formController;

Route::get('/form', [formController::class, 'showform']);
Route::post('/form', [formController::class, 'submitform']);


use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get(
    '/register',
    [AuthController::class, 'showRegister']
);

Route::post(
    '/register',
    [AuthController::class, 'register']
);

Route::get(
    '/login',
    [AuthController::class, 'showLogin']
);

Route::post(
    '/login',
    [AuthController::class, 'login']
);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

Route::get(
    '/logout',
    [AuthController::class, 'logout']
);



// query builder for inserting the record
use Illuminate\Support\Facades\DB;

Route::any('add-user', function () {
    DB::table('students')->insert([
        'name' => "Alok",
        'email' => "alok@gmail.com",
        'age' => 25,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return "student record inserted";
});


// get single record with conditions
Route::get('/users/{id}', function () {

    $students = DB::table('students')->where('id')->first();
    dd($students);
});


// delete record
Route::get('update-user', function () {

    $students = DB::table('students')
        ->whereBetween('age', [20, 30])
        ->get();
    return $students;
});




//uisng controller with query builder
// use App\Http\Controllers\StudentController;

Route::get("/all", [StudentController::class, "showuser"]);



use App\Http\Controllers\StdController;

Route::get('/students', [StdController::class, 'index']);
Route::get('/students/create', [StdController::class, 'create']);
Route::post('/students/store', [StdController::class, 'store']);
Route::get('/students/edit/{id}', [StdController::class, 'edit']);
Route::post('/students/update/{id}', [StdController::class, 'update']);
Route::get('/students/delete/{id}', [StdController::class, 'destroy']);