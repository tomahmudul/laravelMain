<?php

use Illuminate\Http\Request;
// use App\Http\Controllers\OstadController;
// use App\Http\Controllers\WeatherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;


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

Route::get( '/', function () {
    return view( 'welcome' );
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});



Route::get('/users', [UserController::class,'userData']);



Route::get('/StoringData/{email?}', [DemoController::class,'StoringData']);
Route::get('/RetrivingData', [DemoController::class,'RetrivingData']);
Route::get('/DeletingData', [DemoController::class,'DeletingData']);

// //middleware
// Route::get('/hello', function () {
//     return "Hello world";
// } )->middleware("throttle:5,1");


// Route::get("/hello", [AboutController::class, "hello"] )->middleware("simple");
// Route::get("/hi", [AboutController::class, "hi"] )->middleware("simple");

Route::middleware(["simple"])->group( function () {
    Route::get("/hello", [AboutController::class, "hello"] );
    Route::get("/hi", [AboutController::class, "hi"] );
});


//Assignment8, Task 1
Route::post( "/form-submit", function ( Request $request ) {
    $email = $request->input( "email" );
    if ( $email && $email == "john@test.com" ) {
        return response()->json( [
            'status'  => 'success',
            "message" => "Form submitted successfully.",
            'email'   => $email,
        ], 200 );
    } else {
        return response()->json( [
            "status"  => "failed",
            "message" => "Form submission failed.",
        ], 500 );
    }
} );

//Assignment8, Task 2

Route::get( "/user-agent", function ( Request $request ) {
    $userAgent = $request->header( "User-Agent" );
    return response()->json( [
        $userAgent,
    ] );
} );

//Route::get("/profile/{id}", [ProfileController::class,"index"]);

// Route:: get("/assignment", [UserController::class,"assignment_module7"]);

// //module7 Task 1
// Route:: get("/about", [AboutController::class,"index"]);

// //module7 Task 2
// Route::post("/login", [UserController::class,"login"]);

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
