<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Route;

Route::any('/', function(){

return Response("welcome home");
});