<?php

namespace App\Http\Controllers;

use App\Models\Depart;
use Illuminate\Http\Request;

class DepartController extends Controller
{
    public function index(){
        $departs=Depart::all();

        return view('Course_mphil')->with('departs',$departs);
    }
    function Insertvalue(Request $request){
        $course = $request->input('course');
        $pra = $request->input('pra');
        $number = $request->input('number');
        $name = $request->input('name');

        $isInserSuccress = Depart::insert(['course'=>$course , 'pra'=>$pra , 'number'=>$number, 'name'=>$name]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
