<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id"=> $id ,
            "name"=>  $name,
            "age"=>  $age            
        ];

        //Set cookie variables
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = "1";
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;
        
        //Return data as response with status-code 200 and cookie.
        return response()->json(['data'=>$data],200)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
