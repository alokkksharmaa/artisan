<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function show(){
        echo "<pre>";
        // print_r 
    }


    public function fetchsession(){
        if(session()->exists("name")){
            $value = session("name");
            echo "Value of session : " .$value;
        }
        else{
            echo "session does not exist";
        }
    }

    public function deletesession(){
        session()->forget("name");
        return redirect("/get");
    }

    public function login(Request  $request){
        $username = $request->input("username");
        session(['user' => $username]);
        return redirect("/fetch");
    }
}
