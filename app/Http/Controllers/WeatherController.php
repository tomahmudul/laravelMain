<?php

namespace App\Http\Controllers;

use Http;
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

   function weather($location){
    //return $location;
    $weatherDetails = Http::get("https://wttr.in/{$location}?format=j1")->json();
    $currentTemp = $weatherDetails["current_condition"][0]["temp_C"];
    $currentCondition = $weatherDetails["current_condition"][0]["weatherDesc"][0]["value"];

    return view("weather",compact("location","currentTemp","currentCondition"));

   }
}
