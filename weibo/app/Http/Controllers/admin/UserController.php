<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\detail;
use App\Model\like;
use App\Model\comment;
use App\Model\weibo;
use App\Model\attention;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $requestall = $request->all();
        $data = user::paginate(10);
        $auth = array('用户','管理员','超级管理员');
        $status = array('开启','关闭');
        return view('admin.user.list',['data' => $data,'auth' => $auth,'status' => $status,'request'=>$requestall]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = detail::where('uid','=',$id)->first();
        $auth = array('用户','管理员','超级管理员');
        $status = array('开启','关闭');
        return view('admin.user.edit',['res' => $res,'auth' => $auth,'status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['_method','auth','status']);
        $data1 = $request->only(['auth', 'status']);
        $res = detail::where('id',$id)->update($data);
        $res1 = user::where('id',$data['uid'])->update($data1);
        if($res>0 || $res1>0){
            echo 1;
        }else{
            echo 2;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = attention::where('uid',$id)->delete();
        $res1 = attention::where('gid',$id)->delete();
        $res2 = like::where('lid',$id)->delete();
        $res3 = like::where('uid',$id)->delete();
        $res4 = weibo::where('uid',$id)->delete();
        $res5 = comment::where('pid',$id)->delete();
        $res6 = detail::where('uid',$id)->delete();
        $res6 = user::where('id',$id)->delete();
    }
    public function search(Request $request)
    {
        $requestall = $request->all();
        $res = user::where('phone','like','%'.$request->input('phone').'%');
        $data = $res->paginate(10);
        $auth = array('用户','管理员','超级管理员');
        $status = array('开启','关闭');
        return view('admin.user.list',['data' => $data,'auth' => $auth,'status' => $status,'request'=>$requestall]);
    }
}
