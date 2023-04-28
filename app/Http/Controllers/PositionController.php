<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index(){
        $positions=Position::all();

        return view('Position_faculty')->with('positions',$positions);
    }
    function Value(Request $request){
        $si = $request->input('si');
        $name = $request->input('name');
        $des = $request->input('des');
        $degree = $request->input('degree');
        $sub = $request->input('sub');

        $isInserSuccress = Position::insert(['si'=>$si , 'name'=>$name , 'des'=>$des , 'degree'=>$degree, 'sub'=>$sub]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
