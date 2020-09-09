<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function login(){
        return view('admin.pages.auth.login');
    }
    public function loginstore(Request $req){
        $email = $req->email;
        $password = $req->password;
        $user=User::where('email','=',$email)->first();
        if(Hash::check($password,$user->password)){
            return redirect()->to('dashboard');
        }
        else{
            echo ;
            return redirect()->to('login');
        }

    }
}
