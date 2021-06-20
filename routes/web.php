<?php

use Illuminate\Support\Facades\Route;



//homepage
Route::get('/', function () {
    return view('index');
});

Route::get('/courses',function (){
    return view('courses');
});

Route::get('/contact',function (){
    return view('contact');
});









//login and registration page

Auth::routes();

// users
Route::get('/student/dashboard', 'HomeController@index')->name('student.dashboard');
Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');

//admin
Route::get('/admin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::post('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//Route::prefix('admin')->group(function (){
//    Route::get('/login', 'Auth\AdminController@showLoginForm')->name('admin.login');
//    Route::post('/login', 'Auth\AdminController@login')->name('admin.login,submit');
//    Route::get('/', 'AdminController@index')->name('admin.dashboard');
//});






//admin page
Route::middleware('auth:admin')->group(function(){
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admin/student','AdminController@getStudents')->name('admin.student');
    Route::get('/admin/standard','AdminController@getStandard')->name('admin.standard');
    Route::get('/admin/eps','AdminController@getEps')->name('admin.eps');
    Route::get('/admin/document','AdminController@getDocuments')->name('admin.document');
    Route::get('/admin/discussion','AdminController@getDiscussions')->name('admin.discussion');
    Route::get('/admin/teacher','AdminController@getTeachers')->name('admin.teachers');
    Route::get('/admin/classroom','AdminController@getClassroom')->name('admin.classroom');


    Route::post('/admin/notice','AdminController@sendNotice')->name('admin.notice');
    Route::post('/admin/addStdprogram','AdminController@addStandardProgram')->name('add.std.program');
    Route::post('/admin/addEpsprogram','AdminController@addEpsProgram')->name('add.eps.program');


    Route::post('/admin/assignCoures/{id}','AdminController@assignCourse')->name('admin.assignCourse');
    Route::post('/admin/addTeacher','AdminController@addTeacher')->name('admin.addTeacher');
    Route::post('/admin/addcomment/{id}','AdminController@insertComment')->name('admin.add.comment');
    Route::post('/admin/createTopic','AdminController@createTopic')->name('admin.create.topic');
    Route::post('/admin/createContent','AdminController@createContent')->name('admin.create.content');
    Route::post('/admin/createClass','AdminController@createClass')->name('admin.add.classroom');

    Route::patch('/admin/check/{id}','AdminController@allowStud')->name('admin.stud.allowed');

});





//student page
Route::get('/stud/course','UserController@course')->name('student.course');
Route::get('/stud/classroom','UserController@classroom')->name('student.classroom');
Route::get('/stud/profile','UserController@profile')->name('student.profile');
Route::get('/stud/dashboard','UserController@dashboard')->name('student.dashboard');
Route::post('/stud/addcomment/{id}','UserController@insertComment')->name('stud.add.comment');
Route::put('/stud/update','UserController@updateProfile')->name('stud.updateProfile');


Route::post('/stud/profileUpdate','UserController@updateProfile')->name('profile.update');

Route::get('/stud/vclass/{id}','UserController@virtualClass')->name('stud.virtual.class');
Route::get('/stud/preclass/{id}','UserController@preClass')->name('stud.pretest');


Route::fallback(function () {
    return view('404');
});