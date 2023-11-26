<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return "About page";
    }

    function hello(Request $request){

        print_r($request->all());

        return "hello function";
    }
    function hi(){
        return "hi function";
    }


}
