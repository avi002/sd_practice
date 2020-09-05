<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// class1 start
Route::get('/', function () {
    return view('welcome');
});
Route:: get('about-us',function(){
    echo "This will print about us page";
});

Route:: get('about-us/we',function(){
    echo "This will print about us and we";
});
Route:: get('about-us/{anyname}',function($name){
    return view('about-us',['myname'=>$name]);
});
Route:: get('about-us/{anyname}/{anymail}',function($name,$em){
    return view('about-us',['myname'=>$name,'mymail'=>$em]);
});
// class 1 end

// class 2 start
Route:: get('team/{name}','MyController@team');
Route:: get('employees','EmployeeController@index');
// calss 2 end

// class 3 start
Route:: get('add-employee','EmployeeController@add');
Route:: post('insert-employee','EmployeeController@store');
// class 3 end

// class 4
Route::get('add-student','StudentController@create');
Route::post('store-student','StudentController@store');
Route::get('studentsli','StudentController@index');
// class 4 end

// class 5 start
Route::get('edit-student/{id}','StudentController@edit');
// class 5 end