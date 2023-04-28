<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DSR1Controller extends Controller
{
    public function view()
    {
        return view("details_of_scholars_registered_for_mphil_programmed_under_of_report-input");
    }
    public function store(Request $request)
    { 
          echo"<pre>";
          print_r($request->all());
    }
}
