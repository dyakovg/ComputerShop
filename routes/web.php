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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/computer', 'HomeController@ComputerList')->name('ComputerList');
Route::get('/addcomputer', 'HomeController@AddComputer')->name('AddComputer');
Route::post('/savecomputer', 'HomeController@SaveComputer')->name('SaveComputer');
Route::get('/editcomputer/{id}', 'HomeController@EditComputer')->name('EditComputer');
Route::post('/updatecomputer/{id}', 'HomeController@UpdateComputer')->name('UpdateComputer');
Route::get('/deletecomputer/{id}', 'HomeController@DeleteComputer')->name('DeleteComputer');

Route::get('/user', 'UserController@UserList')->name('UserList');
Route::get('/adduser', 'UserController@AddUser')->name('AddUser');
Route::post('/saveuser', 'UserController@SaveUser')->name('SaveUser');
Route::get('/edituser/{id}', 'UserController@EditUser')->name('EditUser');
Route::post('/updateuser/{id}', 'UserController@UpdateUser')->name('UpdateUser');
