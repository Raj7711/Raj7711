<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $guests=Guest::all();

        return view('Guest_lecturers')->with('guests',$guests);
    }
    function Value(Request $request){
        $si = $request->input('si');
        $name = $request->input('name');
        $research = $request->input('research');
        $subject = $request->input('subject');

        $isInserSuccress = Guest::insert(['si'=>$si , 'name'=>$name , 'research'=>$research, 'subject'=>$subject]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
