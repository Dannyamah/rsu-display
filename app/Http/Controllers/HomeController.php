<?php

namespace App\Http\Controllers;

use App\Models\Display;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    function dashboard(){

        $displays = Display::latest()->get();
        $statics = Display::select('static_message')->get();

        return view('dashboard', compact('displays', 'statics'));

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

    function get_status() {
        
            // Retrieve the current status from the database
            $status = DB::table('displays')->orderBy('created_at', 'desc')->limit(1)->value('status');

            return response()->json(['status' => $status]);

    }

    function update_status(Request $request){
        
         // Get the status (1 for "on" and 0 for "off") from the request
         $status = $request->input('status');

         // Update the status in the database
         DB::table('displays')->orderBy('created_at', 'desc')->limit(1)->update(['status' => $status]);
 
         // You can return a response to indicate the status update success if needed
         return response()->json(['message' => 'Status updated successfully']);

    }
}
