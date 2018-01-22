<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\advert;
class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //查询数据库adverts表里所有的数据
        $requestall = $request->all();
         $data = advert::paginate(5);
        // $data = advert::get();
         // dd($res);
        return view('admin/advert/index',['data'=>$data,'request'=>$requestall]);   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/advert/add');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //查询数据库单条信息
        $res = advert::where('id',$id)->first();
        //将数据传递到修改页面
        return view('/admin/advert/edit',['res'=>$res]);
        // return view('admin/advert/edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        //获取数据库图片信息
        $res = advert::where('id',$id)->value('picture');
        //初始化七牛云
        $disk = QiniuStorage::disk('qiniu');

        //删除七牛云信息
        $data = $disk->delete($res);
        
        //删除数据库指定id的信息
        $info = advert::where('id',$id)->delete();

        //删除数据库指定id的信息
        $info = advert::where('id',$id)->delete();
    }
}
