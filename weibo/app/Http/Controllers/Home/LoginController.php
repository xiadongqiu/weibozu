<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\users;
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

        $res =  users::where('username','=',$phone)->find(1);


        if($res){
            echo '1';
        }else{
            echo '0';
        }
    }

}
