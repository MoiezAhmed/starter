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


//Route::resource('admin','Admin\AdminController');

//Route::get('/details','Admin\AdminController@GetAdmindetails');

/*
Route::group(['namespace'=>'Admin'],function () {

    Route::get('/admindetails','SecondController@GetAdminInfo')->middleware('auth');
    Route::get('/AdminIndex','SecondController@AdminIndex');
    Route::get('/GetAdminRole','SecondController@GetAdminRole');
    Route::get('/getphone','SecondController@GetAdminphone');
    route::get('login',function (){return 'login page';})->name('login');
});


Route::namespace('Front')->group(function () {
//all route only access controller or method from controller folder called front
    Route::get('/users','UserController@showAdminName');

});*/
