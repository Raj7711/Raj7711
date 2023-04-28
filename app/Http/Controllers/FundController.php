<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function index(){
        $funds=Fund::all();

        return view('Research_funds')->with('funds',$funds);
    }
    function Value(Request $request){
        $nature = $request->input('nature');
        $year = $request->input('year');
        $name = $request->input('name');
        $total = $request->input('total');
        $received = $request->input('received');

        $isInserSuccress = Fund::insert(['nature'=>$nature , 'year'=>$year , 'name'=>$name , 'total'=>$total, 'received'=>$received]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
