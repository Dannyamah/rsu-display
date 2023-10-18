<?php

namespace App\Http\Controllers;

use App\Models\Display;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    function dashboard(){

        $displays = Display::latest()->get();
        return view('dashboard', compact('displays'));

    }

    function welcome(){

        $display = Display::latest()->value('message');
        $static_message = Display::latest()->value('static_message');

        return view('welcome', compact('display', 'static_message'));

    }

    function index(){

        return view('add-message');
    
    }

    function submit(Request $request, Display $display){
        
        $latest_static_message = Display::latest()->value('static_message');

        $request->validate([
            'message' => 'required',
        ]);

        $display = Display::create([
            'message' => $request->message,
            'static_message' => $latest_static_message,
        ]);

        return redirect()->route('dashboard');

    }

    function static(){

        return view('add-static-message');
    
    }

    function static_submit(Request $request, Display $display){
        
        $latest_message = Display::latest()->value('message');

        $request->validate([
            'static_message' => 'required',
        ]);

        $display = Display::create([
            'static_message' => $request->static_message,
            'message' => $latest_message,
        ]);

        return redirect()->route('dashboard');

    }

    public function edit(Display $display)
    {
       return view('edit-message', compact('display'));
    }

    public function update(Request $request, Display $display)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $display->message = $request->message;

        $display->save();

        return redirect()->route('dashboard');

    }
}
