<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\srphd;

class DSR2Controller extends Controller
{
    //
    public function view()
    {
        return view("details_of_scholars_registered_for_phd_programmed_under_of_report-1input");
    }
    public function store(Request $request)
    { 
          echo"<pre>";
          print_r($request->all());

          $srphd=New Srphd;
          $srphd->scholars_name=$request['scholars_name'];
          $srphd->registration_no=$request['registration_no'];
          $srphd->t_dessertation=$request['t_dessertation'];
          $srphd->supervisor= $request['supervisor'];
          $srphd->save();
    }
    
}

