<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function assignment_module7(){
        return "Hello, Laravel!";
    }

    public function login(Request $request){
        $email = $request->input("email");
        $password = $request->input("password");

        if($email == "hassan@gmail.com" && $password == "123"){
            return "Login successful";
        }else{
            return "Invalid credentials";
        }

    }

    public function userData(){
        $users = DB::table('users')->get(); 
        print_r($users);exit;
        //return view('user.index', ['users' => $users]);
    }
}
