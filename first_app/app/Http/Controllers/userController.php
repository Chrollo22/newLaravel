<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function getData(Request $request){
        $nom=$request->input('nom');
        $email=$request->input('email');
        $message=$request->input('msg');
        return view('thankyou', ['name'=>$nom,'email'=>$email, 'msg'=>$message]);
    }
}
