<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index(){
        $programmes=Programme::all();

        return view('M_phil')->with('programmes',$programmes);
    }
    function Value(Request $request){
        $si = $request->input('si');
        $name = $request->input('name');
        $register = $request->input('register');
        $tit = $request->input('tit');
        $super = $request->input('super');

        $isInserSuccress = Programme::insert(['si'=>$si , 'name'=>$name , 'register'=>$register , 'tit'=>$tit, 'super'=>$super]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
