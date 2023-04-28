<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emphil;

class EMPController extends Controller
{
    public function view()
    {
        $emphil=Emphil::all();
        return view("Details_of_total_scholars_enrolled_for_mphil_phd_programme_in_thedepartment");
    }
     function store(Request $request)
    {
        $no=$request->input('no');
        $programme=$request->input('programme'); 
        $Sc =$request->input('Sc');
        $St=$request->input('St'); 
        $Obc=$request->input('Obc'); 
        $Gen=$request->input('Gen'); 
        $total=$request->input('total'); 

        $isInserSuccress=Emphil::insert(['no'=>$no,'programme'=>$programme,'Sc'=>$Sc,'St'=>$St,'Obc'=>$Obc,'Gen'=>$Gen,'total'=>$total]);
        
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
         


    }
}
