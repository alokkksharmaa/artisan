<?php

namespace App\Http\Controllers;

// controller/TestController.php

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){

        // $value = session->all();

        // echo "<pre>";
        // print_r($value);
        // echo "<pre>";


        // if(session()->has("name"));

        session()->put('class', 'b-tech');

        session(['name' => NULL]);
        session(['name'=>'alok', 
                'user'=> "Kumar"]);

        echo "Session has been stored";

        if(session()->has('name')){
        $value = session()->get("name");    
        echo $value;
        }else{
            echo "name key session does not exist";
        };
        public function deletesession(){
            session()->forget("name");
            echo "destroy session";
        }



        return redirect('/');

    }
}
