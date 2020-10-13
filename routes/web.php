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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');

//Route untuk register teacher dan staff
Route::get('/register-teachers', 'Auth\RegisterController@registerTeacher');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

//Route Untuk Admin saja
Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/dashboard-admin', 'Admin\AdminController@index')->name('dashboard.admin');
});

//Route Untuk Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini 
Route::group(['middleware' => ['auth']], function () {
	Route::get('/dashboard', 'User\UserController@index')->name('dashboard.users');
});

Route::get('/kirim-email', 'EmailController@index');




