<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('auth/logout', 'Auth\AuthController@logout');

Route::get('/admin', 'admin\AdminController@index')->middleware('admin');;



Route::get('/account/profile/{id}', 'account\ProfileController@getProfile');


Route::get('/students', 'students\StudentController@listAllStudents');
Route::get('/students/registered', 'students\StudentController@registeredStudents');
Route::get('/students/records', 'students\StudentController@recAndAssessment');
Route::get('/students/attendance', 'students\StudentController@attendanceRecords');

Route::get('/admission/create', 'students\AdmissionController@create');
Route::post('/admission/post', 'students\AdmissionController@post');
Route::get('/admission/index', 'students\AdmissionController@index');




Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');

Route::resource('profiles', 'ProfilesController');
