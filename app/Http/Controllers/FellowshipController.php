<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fellowship;

class FellowshipController extends Controller
{
    public function view()
    {
        $fellowship=Fellowship::all();
        return view('Details_of_student_who_are_revceving_fellwoship_financial_sopport');
    }
      function store(Request $request)
     {
       
        $variables=$request->input('variables'); 
        $details=$request->input('details'); 
        $Sc=$request->input('Sc');
        $St=$request->input('St');
        $Obc=$request->input('Obc');
        $Gen =$request->input('Gen');
        $total=$request->input('total');

        $isInserSuccress=Fellowship::insert(['variables'=>$variables,'details'=>$details,'Sc'=>$Sc, 'St'=>$St ,'Obc'=>$Obc,'Gen'=>$Gen,'total'=>$total]);
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
     }
}
