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

/*admin root route here*/
Route::get('/admin', 'admin\AdminController@index')->middleware('admin');
Route::get('/createroles', 'admin\AdminController@createRole')->middleware('admin');
Route::get('/allusers', 'admin\AdminController@getAllUsers')->middleware('admin');
Route::get('/allusers/view/{id}', 'admin\AdminController@viewUsers')->middleware('admin');
Route::get('/allroles', 'admin\AdminController@allRoles')->middleware('admin');
Route::get('/allpermissions', 'admin\AdminController@allPermission')->middleware('admin');
Route::get('/allsession', 'admin\AdminController@allSession')->middleware('admin');
Route::get('/examsandgrades', 'admin\AdminController@examsAndGrades')->middleware('admin');



Route::resource('profiles', 'ProfilesController');
Route::get('/account/profile/{id}', 'account\ProfileController@getProfile');
Route::post('profiles/put', 'ProfilesController@updateProfile');


Route::get('/students', 'students\StudentController@listAllStudents');
Route::get('/students/registered', 'students\StudentController@registeredStudents');
Route::get('/students/records', 'students\StudentController@recAndAssessment');
Route::get('/students/attendance', 'students\StudentController@attendanceRecords');


Route::get('/preadmission/create', 'students\PreAdmissionController@create');


Route::get('/admission/create', 'students\AdmissionController@create');
Route::post('/admission/post', 'students\AdmissionController@post');
Route::get('/admission/index', 'students\AdmissionController@index');


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');



