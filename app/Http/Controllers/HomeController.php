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

        $scrolling_message = Display::latest()->value('message');
        $static_message = Display::latest()->value('static_message');

        return view('welcome', compact('scrolling_message', 'static_message'));

    }

    function add_scrolling_message(){

        return view('add-message');
    
    }

    function submit_scrolling_message(Request $request, Display $display){
        
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

    function add_static_message(){

        return view('add-static-message');
    
    }

    function submit_static_message(Request $request, Display $display){
        
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

    public function edit_scrolling_message(Display $display)
    {
       return view('edit-message', compact('display'));
    }

    public function update_scrolling_message(Request $request, Display $display)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $display->message = $request->message;

        $display->save();

        return redirect()->route('dashboard');

    }

    function message_destroy($id)
    {
        $display = Display::findOrFail($id);
        $display->delete();

        return redirect()->route('dashboard')->with('success', 'Transaction deleted successfully.');
    }
}
