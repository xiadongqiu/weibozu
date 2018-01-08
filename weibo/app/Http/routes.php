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



Route::get('/', function () {
    return view('welcome');
});



Route::resource('/index','Home\IndexController');


Route::group(['prefix'=>'user','namespace'=>'Home'],function(){
    //用于访问登录页面的和处理登录信息的路由

    Route::controller('/login','LoginController');
    //用于访问注册页面和处理注册信息的路由

    Route::controller('/register','RegisterController');


    Route::controller('/user','UserController');

});

