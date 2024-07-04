<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data11;

class DataController extends Controller
{
    public function fetchData()
    {
        //dd('hii'); // This should display 'hii' and stop further execution

        // Fetch data from the database
        $data = data11::all(); 
        //dd($data);
        // Return data as JSON
        return response()->json($data);
    }
}
