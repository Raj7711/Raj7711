<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publication;


class NPPController extends Controller
{
    public function view()
    {
        $publication=Publication::all();
        return view("number_of_publications_of_faculty");
    }
    public function store(Request $request)
    { 
          echo"<pre>";
          print_r($request->all());
          $publications=$request->input('publications');
          $faculty_benifite=$request->input('faculty_benifite');
         
          $isInserSuccress=Publication::insert(['publications'=>$publications,'faculty_benifite'=>$faculty_benifite]);
          if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
          

    }
}
