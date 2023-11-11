<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OstadController;
use App\Http\Controllers\WeatherController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get("/assignment", [UserController::class,"assignment_module7"]);

//Task 1
Route:: get("/about", [AboutController::class,"index"]);

//Task 2
Route:: get("/login/{email}/{password}", [UserController::class,"login"]);



// Route::get('/hi', [OstadController::class,'sayHi']);

// Route::get('/hello', [OstadController::class, 'hello']);

// Route::get('/greet/{name?}', [OstadController::class,'greet']);

// Route::post('/form', [OstadController::class,'samplePostRequest']);

// Route::get('/form', [OstadController::class,'sampleGetRequest']);

// Route::get('/location', [WeatherController::class, "location"]);

// Route::get("/weather/{location}", [WeatherController::class,"weather"]);

// Route::get("/hello", function(){
//     return "Hello from web";
// });

// //group of admin routing
// Route::group(["prefix"=> "admin"], function () {

//     Route::get("/", function(){
//         return "This is our admin dashboard";
//     });

//     Route::get("/user-list", function(){
//         return "admin user list page";
//     });

//     Route::get("/create-blog", function(){
//         return "admin create blog page";
//     });

// });

// //Basic routing
// Route::get("/greetings", function (){
//     return "Hello world";
// });