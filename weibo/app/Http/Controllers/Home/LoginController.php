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
    public function getIndex()
    {

        return view('home/login/login');
    }

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

    public function postLogin(request $request)
    {
        $data = $request->except('_token');

        $phone = $data['phone'];

        $password = $data['password'];

        $res = user::where('phone','=',$phone)->first();


        if($password == $res['password']){
            $request->session()->put('home', $res['id']);

            echo '1';
        }else{
            echo '0';
        }


    }

}
