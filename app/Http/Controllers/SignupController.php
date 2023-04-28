<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup()
    {
        $signup=Signup::all();
        return view('signup');
    }

    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        
        $name=$request->input('name');
        $userid=$request->input('userid');
        $email=$request->input('email');
       $password=Hash::make($request->input('password'));
 
       $isInserSuccress=Signup::insert(['name'=>$name,'userid'=>$userid,'email'=>$email,'password'=>$password]);
     
       if($isInserSuccress) echo '<h1>Insert Success</h1>';
       else echo '<h1> Insert Falied<h1>';
    }
    public function log()
{
    return view('login');
}


    public function login(Request $request)
{
    $request->validate(
    [
        'email'=>'required',
        
        
        'password'=>'required',
        
    ]
    );
   
        

}
}
