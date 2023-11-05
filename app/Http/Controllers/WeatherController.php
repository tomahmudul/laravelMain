<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
   function displayLocationDetails(){
        $location = [
            "name"=> "Dhaka",
            "Country"=> "Bangladesh",
            "population"=> "20000000",
            "timezone"=> "GMT+6",
        ];

        return $location;
   }

   function location(){
        $location = [
            "name"=> "Rajshahi",
            "Country"=> "Bangladesh",
            "population"=> "20000000",
            "timezone"=> "GMT+6",
        ];

        $seasons = ["Spring","Winter","Summer"];

        // return view("lc",$location);
        return view("lc",["location"=>$location, "seasons"=>$seasons]);
   }
}
