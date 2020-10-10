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

Auth::routes(['verify' => true]);

//Route Untuk Users dan admin, jika mau untuk users saja silahkan tambahkan middleware role:user
Route::get('/dashboard-users', 'User\UserController@index')->name('dashboard.users');

//Route Untuk Admin saja
Route::get('/dashboard-admin', 'Admin\AdminController@index')->middleware('role:admin')->name('dashboard.admin');