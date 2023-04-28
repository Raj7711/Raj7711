<?php

namespace App\Http\Controllers;

use App\Models\Collaboration;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{
    public function index(){
        $collaborations=Collaboration::all();

        return view('Number_of_collaboration')->with('collaborations',$collaborations);
    }
    function Insert(Request $request){
        $international = $request->input('international');
        $national = $request->input('national');
        $other= $request->input('other');

        $isInserSuccress = Collaboration::insert(['international'=>$international , 'national'=>$national , 'other'=>$other]);
     
        if($isInserSuccress) echo '<h1> Insert Successful </h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
