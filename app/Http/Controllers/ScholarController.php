<?php

namespace App\Http\Controllers;

use App\Models\Scholar;
use Illuminate\Http\Request;

class ScholarController extends Controller
{
    public function index(){
        $scholars=Scholar::all();

        return view('details_of_scholars_registered_for_phd_programme_under_under_year_of_report')->with('scholars',$scholars);
    }
    function Value(Request $request){
        $si = $request->input('si');
        $name = $request->input('name');
        $reg = $request->input('reg');
        $title = $request->input('title');
        $sup = $request->input('sup');

        $isInserSuccress = Scholar::insert(['si'=>$si , 'name'=>$name , 'reg'=>$reg , 'title'=>$title, 'sup'=>$sup]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
