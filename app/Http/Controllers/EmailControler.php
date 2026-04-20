<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailControler extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        $toemail =  "aloksharma1097@gmai.com";
        $message =  "Hi";
        $subject =  "Test Email";
        // $request =  Mail::to($toemail)->send(new Welcomemail($message, $subject));
        dd($request);
    }
}
