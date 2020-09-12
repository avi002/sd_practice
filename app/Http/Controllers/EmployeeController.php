<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class EmployeeController extends Controller
{
    
        // class 2
    public function index(){
        //fatch data from employee table
        $employees = DB::table('employees')->get();
       

        //send data to emplyee view
        return view('employees',['employees'=>$employees]);

        
    }
    
        // class 2 end
        // class 3
    public function add(){
        return view('add');
    }
    public function store(Request $req){
        $name = $req->name;
        $email = $req->email;
        $dob = $req->dob;
        DB::table('employees')->insert(
            [
                'name' => $name,
                'email' => $email,
                'dob' => $dob
             ]
        );
        return redirect()->to('employees');

    }
        // class 3 end
        public function createemp(){
            return view('admin.pages.create-employee');
        }
        public function storeemp(Request $req){
            $validatedData = $req->validate([
                'name' => 'required|max:100',
                'email' => 'required|email|unique:employees,email',
                'salary' => 'required|integer',
                'dob' => 'required|date'
                ]);
            $name = $req->name;
            $email = $req->email;
            $salary = $req->salary;
            $dob = $req->dob;


        }
}
