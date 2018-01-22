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



// 夏冬秋路由==========================================
Route::controller('/a','Home\NotController');

Route::group(['middleware'=>'home'],function(){
	
	Route::controller('/index','Home\IndexController');

	Route::resource('/detail','Home\DetailController');

});




//===================================================


//陈明路由==================================================
Route::group(['prefix'=>'user','namespace'=>'Home'],function(){


	Route::controller('/index','IndexController');

	Route::resource('/detail','DetailController');

    Route::group(['middleware'=>'homelogin'],function(){
        //用于访问登录页面的和处理登录信息的路由

        Route::controller('/login','LoginController');
    });


    //用于访问注册页面和处理注册信息的路由

    Route::controller('/register','RegisterController');

    Route::group(['middleware'=>'home'],function(){
        //用于展示个人中心以及处理数据
        Route::controller('/user','UserController');



    });
});
//===============================================================


//后台
Route::group(['prefix' => 'admin','namespace' => 'admin'], function () {

	//跳转到登录页
		Route::get('/login','LoginController@index');

		//登录提交执行
		Route::post('/login','LoginController@login');

		//判断是否登录的中间件
		Route::group(['middleware' => 'adminlogin'], function () {

			//跳转到首页
			Route::get('/','IndexController@index');
			Route::get('/index','IndexController@index');

			//退出登录
			Route::get('/loginout','LoginController@loginout');

		    //跳转到用户
		    Route::resource('/user','UserController');
		    Route::get('/user/search/{phone}','UserController@search'); 

		    //修改密码
			Route::get('/pass','UserController@pass');

		    //跳转到举报
		    Route::resource('/report','ReportController');

		    //微博-名泽
		    Route::resource('/post','PostController');
		    Route::get('/post/search/{nickname}','PostController@search'); 
			Route::resource('/comments/{id}','CommentsController');
		});


//郑鑫路由=======================================================================
 		//后台网站配置路由
		 Route::get('/config','ConfigController@edit');
		 // 网站公告资源路由
		 Route::resource('/notice','NoticeController');
		 
		//后台广告管理资源路由
		 Route::resource('/advert','AdvertController');
//==============================================================================

});