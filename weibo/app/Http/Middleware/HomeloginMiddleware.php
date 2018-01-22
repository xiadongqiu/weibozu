<?php

namespace App\Http\Middleware;

use Closure;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\detail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\JsonResponse;
use App\Model\weibo;
use App\Model\attention;
use App\Tool\Common;

class HomeloginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        if($request->session()->get('home')!= null){

            $uid = $request->session()->get('home');
            $status = $request->only('status');
            $res = user::find($uid);
            $arr = (explode(':',$res->detail->adress));
             if($res->detail->pics!=null){
                $array = json_decode($res->detail->pics,true);
                $array1 = array_values($array);
            }else{
                $array1 = '0';
            }
            return view('home/user/user',['res'=>$res,'adress'=>$arr,'status'=>$status,'pic'=>$array1,'uid'=>$uid]);

        }else{
            return $next($request);

        }
    }
}
