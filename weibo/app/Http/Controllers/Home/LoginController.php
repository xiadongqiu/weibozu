<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\user;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //加载登录页
    public function getIndex()
    {

        return view('home/login/login');
    }


    //判断是否存在该手机号
    public function postPhone(request $request)
    {
        $phone = $request->input('phone');

        $res =  user::where('phone','=',$phone)->first();


        if($res){
            echo '1';
        }else{
            echo '0';
        }
    }


    //执行登录动作
    public function postLogin(request $request)
    {
        $data = $request->except('_token');

        $phone = $data['phone'];

        $password = $data['password'];

        $res = user::where('phone','=',$phone)->first();

        if($res['status'] != 0){
            echo '2';
        }else{
            if($password == $res['password']){
                $request->session()->put('home', $res['id']);

                echo '1';
            }else{
                echo '0';
            }
        }

    }

}
