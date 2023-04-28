<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DCQController extends Controller
{
    public function view()
    {
        return view("details_of_candidate_qualified_for_the_mphil_degree_under_year_of_report-input");
    }
    public function store(Request $request)
    { 
          echo"<pre>";
          print_r($request->all());
    }
}
