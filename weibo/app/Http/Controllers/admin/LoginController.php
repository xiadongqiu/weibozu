<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('admin')){
            return redirect('admin/index');
        }else{
            return view('admin/login');
        }
    }

    public function login(Request $request)
    {	
    	$username = $request->input('phone');//获取登录的用户名
    	$password = $request->input('password');//获取登录的密码
    	//判断用户名密码是否为空
    	if(!$username or !$password) {
    		echo 1;
    		exit;
    	}
    	//判断用户名密码是否错误
    	$res = user::where('phone','=',$username)->first();//获取同户名相同的信息
    	$id = $res['id'];
    	if(!$res) {
    		echo 2;
    		exit;
    	}
		//获取到继续执行    	
    	$pass = $res['password'];
    	if($password != $pass) {
    		echo 2;
    		exit;
    	}
    	//判断是否有权限登录
    	$res = user::where('phone','=',$username)->value('auth');
    	if($res<=0){
    		echo 3;
    		exit;
    	}
    	//修改登录时间
    	$res = user::where('phone','=',$username)->update(['lastlogin_time'=>time()]);
    	if($res){
    	$request->session()->put('admin',$id);
        $request->session()->put('home',$id);
    	echo 4;
    	}
    }

    public function loginout(Request $request)
    {
    	$request->session()->forget('admin');
        $request->session()->forget('home');
    	return redirect('admin/login');
    }

    
}
