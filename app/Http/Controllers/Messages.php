<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Messages extends Controller
{
    public function index(Request $request)
    {
        $dataArray = $request->input('data'); // Retrieve the array of data from the request
        
        // Process the data as needed
        
        // Return a response
        return response()->json(['message' => 'Data received and processed successfully']);
    }
}
