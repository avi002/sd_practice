<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;
class AuthController extends Controller
{
    public function login(){
        if(Session::has('userid')){
            return redirect()->to('dashboard');
        }
        return view('admin.pages.auth.login');
    }
    public function loginstore(Request $req){
        $email = $req->email;
        $password = $req->password;
        $user=User::where('email','=',$email)->first();
        if(Hash::check($password,$user->password)){
            //save some user info in the session
            Session::put('userid',$user->id);
            Session::put('useremail',$user->email);
            return redirect()->to('dashboard');
        }
        else{
            return redirect()->to('login');
        }

    }

    public function logout(){
        Session::flush();
        return redirect()->to('login');
    }
}
