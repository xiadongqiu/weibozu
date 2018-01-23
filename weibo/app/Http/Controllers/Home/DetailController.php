<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\weibo;
use App\Model\user;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Request $request,$id)
    {
        //获取当前微博的类型
        $weibo = weibo::where('id',$id)->first();

        $uid = $request->session()->get('home');

        $res = user::where('id',$uid)->first();
        //通过单签微博类型查询类型相同的微博
        $data = weibo::where('type',$weibo['type'])->where('id','!=',$id)->take(5)->get();
        
        $pictrue = json_decode($weibo['picture'],true);

        $arr = array();
        foreach($res->attent as $k=>$v){
            foreach ($v['attributes'] as $kk=>$vv){
                $arr[] = $vv;
            }
        }

        return view('Home.detail.detail',['data'=>$data,'res1'=>$res,'arr'=>$arr,'res'=>$weibo,'pictrue'=>$pictrue]);
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
        //
    }
}
