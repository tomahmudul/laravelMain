<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstadController extends Controller
{
    function sayHi(){
        return "Welcome to our laravel course";
    }

    function hello(){
        # code...
        return "hello method called";
    }

    function greet($abc = "john"){
        # code...
        return "Hello, ". $abc;
    }

    function samplePostRequest(Request $request){
        //return $request->all();
        return "POST request";
    }

    function sampleGetRequest(Request $request){
        //return $request->all();
        return "GET Request";
    }
}
