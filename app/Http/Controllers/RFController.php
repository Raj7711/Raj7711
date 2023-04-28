<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\research;

class RFController extends Controller
{
    public function view()
    {
        return view("Research_funds_sanctioned_received_from_various_funding_agencies_industry_and_other_organization-input");
    }
    public function store(Request $request)
    { 
          echo"<pre>";
          print_r($request->all());
         
          $research=New Research;
          $research->si_no= $request['si_no'];
          $research->Nature_project= $request['Nature_project']; 
          $research->duration= $request['duration']; 
          $research->funding_agency= $request['funding_agency'];
          $research->T_sanctioned=$request ['T_sanctioned']; 
          $research->Received= $request['Received']; 
          $research->save();


    } 
}
