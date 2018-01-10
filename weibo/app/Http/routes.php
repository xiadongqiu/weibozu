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

Route::get('/comment','Home\NotController@comment');
Route::get('/replay','Home\NotController@replay');


Route::resource('/index','Home\IndexController');

Route::resource('/detail','Home\DetailController');

//===================================================


//陈明路由==================================================
Route::group(['prefix'=>'user','namespace'=>'Home'],function(){
    //用于访问登录页面的和处理登录信息的路由

    Route::controller('/login','LoginController');
    //用于访问注册页面和处理注册信息的路由

    Route::controller('/register','RegisterController');

    Route::group(['middleware'=>'home'],function(){
        //用于展示个人中心以及处理数据
        Route::controller('/user','UserController');
    });
});
//===============================================================


<<<<<<< HEAD
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

     //默认跳转到用户list
    Route::get('/user',function(){return redirect('admin/user/list');});
    Route::resource('/user/list','UserController');


    //默认跳转到举报list
    Route::get('/report',function(){return redirect('admin/report/list');});
    Route::resource('/report/list','ReportController');
   });
   


//吕明泽路由=====================================================================
    Route::resource('/post','PostController');
    Route::resource('/comments','CommentsController');
//==============================================================================


//郑鑫路由=======================================================================
    //后台网站配置路由
     Route::get('/config','ConfigController@edit');
//==============================================================================
});
      
=======
>>>>>>> 595b6585c13782e1b1be5ab48237d6b1f977e968
