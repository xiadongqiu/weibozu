<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\weibo;
use App\Model\comment;

class NotController extends Controller
{
    /**
     * 未登录首页微博信息
     */
    public function getIndex()
    {
        //dd(time());
        $weibo = weibo::get();
        // echo json_encode($weibo);
        return view('Home.index1.not',['data'=>$weibo]);
    }

    /**
    *   ajax接收，查询评论信息
    */
    public function comment (Request $request)
    {
        
        $id = $request->input('id');
        $comment = comment::where('wid',$id)->get();
        echo json_encode($comment);

    }

   /**
    *   ajax接收，查询回复信息
    */
    public function replay (Request $request)
    {
        $id = $request->input('id');
        $hui = comment::where('fid',$id)->get();
        echo json_encode($hui);
        // var_dump($id);

    }
}
