<?php

namespace App\Http\Controllers;

use App\Models\Display;
use Illuminate\Http\Request;

class DisplayController extends Controller
{

    function index() 
    {
    
        $latest_message = Display::latest()->first();

        $message = $latest_message->message;

        return response()->json([
            'message' => $message,
            'status' => 'success'
        ],200);
        
    }
}
