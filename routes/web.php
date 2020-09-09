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
    return view('website.pages.welcome');
});
Route::get('about-us', function () {
    return view('website.pages.about-us');
});
Route::get('contact-us', function () {
    return view('website.pages.contact-us');
});
Route::get('services', function () {
    return view('website.pages.services');
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
Route::post('update-student/{id}','StudentController@update');
// class 5 end



// route for single layout
Route::get('login','AuthController@login');
Route::post('loginstore','AuthController@loginstore');
// end

// middleware
Route::group(['middleware' => 'checkloggedin'],function(){
    //routes for admin panel
    Route::get('dashboard',function(){
        return view('admin.pages.dashboard');
    });
    // end
});