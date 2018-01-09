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


});

//lifan-------------------------------------------------------------------
//后台
Route::group(['prefix' => 'admin','namespace' => 'admin'], function () {
	Route::get('/login','LoginController@index');
	Route::post('/login','LoginController@login');
  		//判断是否登录的中间件
		Route::group(['middleware' => 'login'], function () {
   			Route::get('/','IndexController@index');
   			Route::get('/index','IndexController@index');
   			Route::get('/loginout','LoginController@loginout');
   			Route::resource('/user/list','UserController');
  	  	});
});
//------------------------------------------------------------------------
