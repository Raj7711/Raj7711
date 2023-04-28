<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sstudent;

class SP1Controller extends Controller
{
    public function  view()
    {
        
    $sstudent=Sstudent::all();
    return view('Student_particulars_specify_the_semester1')->with('sstudent',$sstudent);
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        $no=$request->input('no'); 
        $PG=$request->input('PG'); 
        $Sc=$request->input('Sc');
        $St=$request->input('St'); 
        $Obc=$request->input('Obc'); 
        $Gen=$request->input('Gen'); 
        $total=$request->input('total'); 

        $isInserSuccress=Sstudent::insert(['no'=>$no,'PG'=>$PG,'Sc'=>$Sc,'St'=>$St,'Obc'=>$Obc,'Gen'=>$Gen,'total'=>$total]);
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';

    }
}
