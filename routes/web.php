<?php

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

Route::get('/', function () {
    return view('front');
});
Route::get('/contact', function () {
    return view('contact');
 
});

Route::get('/MemberLogin', function () {
    if(auth()->user()->userType==0){
        return view('admin.home');
    }
    if(auth()->user()->userType==1){
        return view('student.home');
    }
    if(auth()->user()->userType==2){
        return view('teacher.home');
    }
    if(auth()->user()->userType==3){
        return view('parent.home');
    }
});

Route::get('/relationships','RelationshipsController@index');
Route::post('/relationships','RelationshipsController@store');

Route::get('/chats','ChatsController@index');
Route::get('/chats/{id}/view','ChatsController@view');
Route::post('/chats/{id}/view','ChatsController@store');

Route::get('/studymaterial','studyMaterialsController@index');
Route::get('/studymaterial/upload','studyMaterialsController@create');
Route::post('studymaterial/upload','studyMaterialsController@store');

Route::get('/scholarships','ScholarshipsController@index');
Route::get('/scholarships/create','ScholarshipsController@create');
Route::post('/scholarships/create','ScholarshipsController@store');


Route::get('/attendance','AttendanceController@index');
Route::get('/attendance/{id}/create','AttendanceController@create');
Route::post('/attendance/{id}/create','AttendanceController@store');
Route::get('/attendance/{id}/view','AttendanceController@view');

Route::get('/marks','MarksController@index');
Route::get('/marks/{id}/create','MarksController@create');
Route::post('/marks/{id}/create','MarksController@store');
Route::get('/marks/{id}/view','MarksController@view');

Route::resource('notifications' , 'NotificationsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
