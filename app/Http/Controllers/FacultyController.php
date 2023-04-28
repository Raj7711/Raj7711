<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        $faculties=Faculty::all();

        return view('Faculty_qualified')->with('faculties',$faculties);
    }
    function Value(Request $request){
        $no = $request->input('no');
        $name = $request->input('name');
        $regis = $request->input('regis');
        $title = $request->input('title');
        $sup = $request->input('sup');

        $isInserSuccress = Faculty::insert(['no'=>$no , 'name'=>$name , 'regis'=>$regis , 'title'=>$title, 'sup'=>$sup]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
    public function delete($id)
    {
       $ptfaculty= Faculty::find($id);
       echo"<pre>";
       /*if(!is_null($ptfaculty)){
         $ptfaculty->delete();
         return redirect('/fac');*/
       }
       
}

