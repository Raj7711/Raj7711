<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NCSController extends Controller
{
    public function view()
    {
        return view("No_of_conference_organized_by_the_department-input");
    }
    public function store(Request $request)
    { 
          echo"<pre>";
          print_r($request->all());
    }
    
}
