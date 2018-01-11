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
        $arr = (explode(':',$res->detail->adress));
        return view('home/user/user',['res'=>$res,'adress'=>$arr]);

    }

    public function postEdit(request $request)
    {
        $form = $request->all();


        $id = $request->session()->get('home');

        $res = detail::where('id',$id)->update($form);

        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

}
