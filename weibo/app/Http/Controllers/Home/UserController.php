<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\detail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(request $request)
    {
        $uid = $request->session()->get('home');
        $res = user::find($uid);
        return view('home/user/user',['res'=>$res]);

    }

    public function postEdit(request $request)
    {
        $form = $request->only('form');
        $string = $form['form'];
        $data = explode('&',$string);
        $arr = [];
        $id = $request->session()->get('home');
        foreach($data as $k=>$v){
            $array = explode('=',$v);
            $arr[$array[0]] = $array[1];
        }
        $res = detail::where('id',$id)->update($arr);

        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

}
