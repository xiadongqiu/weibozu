<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\comment;
use App\Model\weibo;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\JsonResponse;
class CommentsController extends Controller
{

    //评论信息
    public function getComment (Request $Request)
    {
        $id = $Request->input('id');
        $data = comment::where('wid',$id)->get();
        return view('admin/post/comments',['data'=>$data]);
    }

    //回复信息
    public function getReplay(Request $Request)
    {
        $id = $Request->input('fid');
        $data = comment::where('fid',$id)->get();
        return view('admin/post/replay',['data'=>$data]);
    }

    //删除回复
    public function postDelhui(Request $Request)
    {
        $id = $Request->input('id');
        $res = comment::where('id',$id)->delete();
        if($res){
            echo '1';
        }else{
            echo '2';
        }
    }

    //删除评论
    public function postDelping(Request $Request)
    {
        //获取评论微博的id
        $wid = $Request->input('wid');
        //获取评论的id
        $id = $Request->input('id');
        $res1 = comment::where('fid',$id)->delete();
        $res = comment::where('id',$id)->delete();
        weibo::where('id',$wid)->decrement('comment', 1);
        if($res){
            echo '1';
        }else{
            echo '2';
        }
    }
  
}
