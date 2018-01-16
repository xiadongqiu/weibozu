<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\attention;
use App\Model\weibo;
use App\Model\detail;
use App\Model\comment;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\JsonResponse;

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
        $uid = 2;
        $detail = detail::where('id',$uid)->first();

        $commdata = [];

        $content = $Request->input('pcont');
        $wid = $Request->input('wid');

        $commdata['nickname'] =$detail['nickname'];
        $commdata['content'] =$content;
        $commdata['wid'] =$wid;
        $commdata['pid'] =$uid;
        $commdata['comment_time'] =time();

        $res = comment::insertGetId($commdata);
        if($res){
            $new = comment::where('id',$res)->first();
            echo json_encode($new);
        }else{
            echo 2;
        }

        //echo 'a';
    }
    //追加回复的ajax
    public function getHuifu(Request $Request)
    {
        $uid = 2;
        $detail = detail::where('id',$uid)->first();

        $commdata = [];

        $content = $Request->input('hcont');
        $wid = $Request->input('wid');
        $fid = $Request->input('fid');

        $commdata['nickname'] =$detail['nickname'];
        $commdata['content'] =$content;
        $commdata['wid'] =$wid;
        $commdata['fid'] =$fid;
        $commdata['comment_time'] =time();

        $res = comment::insertGetId($commdata);
        if($res){
            $new = comment::where('id',$res)->first();
            echo json_encode($new);
        }else{
            echo 2;
        }

        //echo 'a';
    }

    //发布微博的ajax
    public function postSend (Request $Request)
    {

        
        //dump($Request->all());
        $data = [];
        $uid = 2;
        $nickname = detail::where('id',$uid)->first();

        $content = $Request->input('content');
        $picture = $Request->input('picture');
        $data['uid'] = $uid;
        $data['nickname'] = $nickname['nickname'];
        $data['content'] = $content;
        
            $picture = rtrim($picture,',');
            $picture = explode(',', $picture);
            //dump($picture);

            $pics = [];
            foreach ($picture as $key => $value) {
                $pics[rand(000,999)] = $value;
            }
            //dd($pics);

            $picture = json_encode($pics);
            //dd($picture);
        $data['picture'] = $picture;
        $data['publish_time'] = time();
        //dump($data);
        $res = weibo::insertGetId($data);
        if($res){
            $new = weibo::where('id',$res)->first();
            echo json_encode($new);
        }else{
            echo '发布失败';
        }
    }


    public function postShang(request $request)
    {
        // echo 1;
        // $aa = 1;
        $file =  input::file('file');

        $disk = \Storage::disk('qiniu');

        $pat = $file->getClientOriginalExtension();
        $fileName = md5(rand(0000,9999)).'.'.$pat;
        $path = $file->getRealPath();

        $disk -> put($fileName,fopen($path,'r+'));

        $arr[rand(0000,9999)] = $fileName;

        return $fileName;

        $disk->delete($fileName);

    }



}
