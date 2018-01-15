<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\attention;
use App\Model\weibo;
use App\Model\detail;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex ()
    {
        
        $uid = 2;
        //找出关注表中的所有关注的人的gid
        $gids = [];
        $gids[] = $uid;
        $attention = attention::where('uid',$uid)->get();
        foreach ($attention as $key => $value) {
            $gids[] = $value['gid'];
        }
        //dump($gids);

        $weibo_data = [];
        foreach ($gids as $gidsk => $gidsv) {
            $weidata = weibo::where('uid',$gidsv)->orderBy('publish_time','desc')->get();
            if($weidata != null){
                $weibo_data[] = $weidata;
            }
        }
        //dump($weibo_data);

        $data = [];
        foreach ($weibo_data as $k => $valdata) {
            foreach ($valdata as $kk=> $datav) {
                $data[] = $datav;
            }
        }
        //dump($data);

        //页大小
        $page = 4;
        //总条数
        $lists = count($data);//10
        //总页数
        $pages = ceil($lists/$page);

        $data = array_slice($data,0,$page);

        //热门微博
        $hot = weibo::orderBy('like','desc')->take(8)->get();
        //关注的好友
        /*foreach ($gids as $gidsk => $gidsv) {
            $att = detail::where('id',$gidsv)->get();
        }*/
       
        $detail = detail::where('id',$uid)->first();
        return view('home.index.index',['data'=>$data,'page'=>$pages,'hot'=>$hot,'detail'=>$detail]);
    }

    public function getWei(Request $Request)
    {
        $uid = 2;
        //找出关注表中的所有关注的人的gid
        $gids = [];
        $gids[] = $uid;
        $attention = attention::where('uid',$uid)->get();
        foreach ($attention as $key => $value) {
            $gids[] = $value['gid'];
        }
        //dump($gids);

        $weibo_data = [];
        foreach ($gids as $gidsk => $gidsv) {
            $weidata = weibo::where('uid',$gidsv)->get();
            if($weidata != null){
                $weibo_data[] = $weidata;
            }
        }
        //dump($weibo_data);

        $data = [];
        foreach ($weibo_data as $k => $valdata) {
            foreach ($valdata as $kk=> $datav) {
                $data[] = $datav;
            }
        }
        //dump($data);

        //接收ajax传过来的值,就是分页的第几页
        $aid = $Request->input('aid');
        //页大小
        $page = 4;
        //总条数
        $lists = count($data);//10
        //总页数
        $pages = ceil($lists/$page);

        if($aid){
            //dump($aid);
            $data = array_slice($data,($aid-1)*$page,$aid*$page);
            echo json_encode($data);
        }
    }

    //追加评论的ajax
    public function getPing(Request $Request)
    {
        $content = $Request->input('pcont');
        echo 'a';
    }
    
}
