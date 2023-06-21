<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class ShowController extends Controller
{
    public function showData()
    {
       $data = DB::table('employees')->get();

    
        return view('show')->with('data', $data);
    }
}
