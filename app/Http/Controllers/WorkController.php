<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        $works=Work::all();

        return view('Name_of_papers')->with('works',$works);
    }
    function Value(Request $request){
        $si = $request->input('si');
        $name = $request->input('name');
        $pro = $request->input('pro');
        $venue = $request->input('venue');
        $date = $request->input('date');

        $isInserSuccress = Work::insert(['si'=>$si , 'name'=>$name , 'pro'=>$pro , 'venue'=>$venue, 'date'=>$date]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}

