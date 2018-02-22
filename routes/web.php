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
    return view('auth.login');
});
Route::get('post', 'PostController@create');
Route::get('show', 'PostController@show');
Route::get('logout', 'PostController@logout');
Route::get('approve/{id}', 'PostController@postApprove')->name('approve');
Route::get('edit/{id}', 'PostController@edit')->name('edit');
Route::get('update/{id}', 'PostController@update')->name('update');
Route::get('delete/{id}', 'PostController@destroy')->name('delete');

Route::resource('all', 'Student');
Route::get('dashboard', 'Student@index');
Route::get('addStudent', 'Student@create');
Route::post('student', 'Student@store')->name('student');
Route::get('bulkStudent', 'Student@bulkStudent');
Route::post('bulkStore', 'Student@bulkStore')->name('bulkStore');
Route::get('studentList', 'Student@studentList');
Route::get('show', 'Student@show');
Route::get('show1', 'Student@show1');
Route::get('show2', 'Student@show2');
Route::get('show3', 'Student@show3');
Route::get('view/{id}', 'Student@view')->name('view');



Route::resource('class', 'ClassController');
Route::get('addClass', 'ClassController@create');
Route::get('showClass', 'ClassController@show');
Route::get('showClassDetails/{id}', 'ClassController@showClassDetails')->name('showClassDetails');

Route::resource('section', 'SectionController');
Route::get('addSection', 'SectionController@create');
Route::get('showSection', 'SectionController@show');

Route::resource('teacher', 'TeacherController');
Route::get('addTeacher', 'TeacherController@create');
Route::get('showTeacher', 'TeacherController@show');
Route::get('view/{id}', 'TeacherController@view')->name('view');


Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');