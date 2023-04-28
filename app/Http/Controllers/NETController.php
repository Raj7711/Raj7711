<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slet;

class NETController extends Controller
{
    public function view()
    {
        $slet=Slet::all();
        return view('number_of_candidate_qualified_inNet_slet_examination_in_the_year_under_report');

    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        $qualified=$request->input('qualified');
        $Sc=$request->input('Sc');
        $St=$request->input('St');
        $Obc=$request->input('Obc');
        $Gen=$request->input('Gen');
        $total=$request->input('total');
    
         $isInserSuccress=Slet::insert(['qualified'=>$qualified,'Sc'=>$Sc,'St'=>$St,'Obc'=>$Obc,'Gen'=>$Gen,'total'=>$total]);
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';

    }
}
