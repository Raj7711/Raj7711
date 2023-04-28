<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(){
        $candidates=Candidate::all();

        return view('Candidates')->with('candidates',$candidates);
    }
    function Value(Request $request){
        $si = $request->input('si');
        $name = $request->input('name');
        $register = $request->input('register');
        $tit = $request->input('tit');
        $super = $request->input('super');

        $isInserSuccress = Candidate::insert(['si'=>$si , 'name'=>$name , 'register'=>$register , 'tit'=>$tit, 'super'=>$super]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
