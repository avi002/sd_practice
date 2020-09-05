<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//using model
use App\Student;

class StudentController extends Controller
{
    public function create(){
        return view('add-student');
    }
    public function store(Request $req){
        $name = $req->name;
        $email = $req->email;
        $dob = $req->dob;
        //eloquent syntex
        $obj = new Student();

        $obj->name = $name;
        $obj->email = $email;
        $obj->dob = $dob;

        if($obj->save()){
            echo 'Successfully inserted';
        }
        


    }

    public function index(){
        $students = Student::all();
        return view('students',['slist'=>$students]);
    }

    // class 5
    public function edit($id){
        $student = Student::where('id','=',$id) -> first();
        return view('edit-student',['student'=>$student]);
    }
    // class 5 end
}
