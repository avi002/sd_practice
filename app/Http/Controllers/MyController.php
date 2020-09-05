<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function team($n){
        $dogs=['shajal','shanto','tusin'];
        return view('team',['myname'=>$n,'mydogs'=>$dogs]);
    }
}
