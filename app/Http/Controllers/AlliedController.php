<?php

namespace App\Http\Controllers;

use App\Models\Allied;
use Illuminate\Http\Request;

class AlliedController extends Controller
{
    public function index(){
        $allieds=Allied::all();

        return view('Allied_and__cognate_subjects')->with('allieds',$allieds);
    }
    function Value(Request $request){
        $serial = $request->input('serial');
        $alli = $request->input('alli');
        $cog= $request->input('cog');

        $isInserSuccress = Allied::insert(['serial'=>$serial , 'alli'=>$alli , 'cog'=>$cog]);
     
        if($isInserSuccress) echo '<h1> Insert Successful </h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
