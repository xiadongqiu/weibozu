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
    public function getIndex (Request $Request)
    {
        //dd(time());
        // $users = App\User::paginate(15);
        $weibo = weibo::paginate(5);
        // echo json_encode($weibo);
        $hot = weibo::orderBy('like','desc')->take(8)->get();
        return view('home.index1.not',['data'=>$weibo,'hot'=>$hot]);
    }

    /**
    *   ajax接收，查询评论信息
    */
    public function getComment (Request $request)
    {
        
        $id = $request->input('id');
        $comment = comment::where('wid',$id)->get();
        echo json_encode($comment);

    }

   /**
    *   ajax接收，查询回复信息
    */
    public function getReplay (Request $request)
    {
        $id = $request->input('id');
        $hui = comment::where('fid',$id)->get();
        echo json_encode($hui);
        // var_dump($id);

    }
    /**
    *   ajax接收，换一批
    */
    public function getHuan()
    {
        $huan = weibo::orderBy(\DB::raw('RAND()'))->take(8)->get();
        echo json_encode($huan);
    }
}
