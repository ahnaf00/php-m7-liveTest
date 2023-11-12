<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login()
    {
        return view("form");
    }

    function store(Request $request)
    {
        $email = $request->input("email");
        $passwrd = $request->input("password");
        if($email == "ahnaf@gmail.com" && $passwrd == "1234")
        {
            $data = "Login Successful";
            return view("message", compact("data"));
        }
        else
        {
            $data = "Invalid Credentials";
            return view("message", compact("data"));
        }
    }
}
