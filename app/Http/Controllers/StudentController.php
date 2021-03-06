<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//using model
use App\Student;

class StudentController extends Controller
{
    public function create(){
        return view('admin.pages.add-student');
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
            return redirect()->to('studentsli');
        }
        


    }

    public function index(){
        $students = Student::all();
        return view('admin.pages.students',['slist'=>$students]);
    }

    // class 5
    public function edit($id){
        $student = Student::where('id','=',$id) -> first();
        return view('admin.pages.edit-student',['student'=>$student]);
    }

    public function update($id, Request $req){
        $student = Student::where('id','=',$id) -> first();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->dob = $req->dob;
        if($student->save()){
            return redirect()->to('studentsli');
        }

    }
    // class 5 end

    public function delete($id){
        Student::where('id','=',$id) -> delete();
        return redirect()->to('studentsli');
    }
}
