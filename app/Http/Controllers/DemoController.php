<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function StoringData(Request $request){
        $request->session()->put("user_email", $request->email);
        return true;
    }

    public function RetrivingData(Request $request){
        echo $request->session()->pull("user_email", "default");
    }
    public function DeletingData(Request $request){
        $request->session()->forget("user_email");
        return true;
    }

    public function FlashData(Request $request){
        $request->session()->flush();
        return true;
    }


}
