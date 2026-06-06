<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        // display list of upcoming events
        $events =  [
            [
                'id' =>  1,
                'name' => "tech fest 2026",
                'date' => "15-06-26"
            ],
            [
                'id' =>  2,
                'name' => "AI WorkShop",
                'date' => "13-06-26"
            ],
            [
                'id' =>  3,
                'name' => "hackathon",
                'date' => "17-06-26"
            ]
        ];
        return view('events.index', compact('events'));
    }

    public function register($eventId)
    {
        return "Successfully registered for event Id" . $eventId;
    }
}
