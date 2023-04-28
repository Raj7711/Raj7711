<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class ServiceController extends Controller
{
    public function view()
    {
        
        $service=Service::all();
        return view('number_of_successful_candidate_in_public_service_examination_ias_ips_in_the_year_under_report');
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        $upsc=$request->input('upsc');
       $cat=$request->input('cat');
       $total=$request->input('total');
      $psc=$request->input('psc');

      $isInserSuccress=Service::insert(['upsc'=>$upsc,'cat'=>$cat,'total'=>$total,'psc'=>$psc]);
    
      if($isInserSuccress) echo '<h1>Insert Success</h1>';
      else echo '<h1> Insert Falied<h1>';
    }
}
