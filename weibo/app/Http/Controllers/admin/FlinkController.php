<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\flink;
class FlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $res = flink::get();
        //  return view('admin/flink/index',['res'=>$res]);
        $requestall = $request->all();
         $data = flink::paginate(3);
       return view('admin/flink/index',['data' => $data,'request'=>$requestall]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/flink/add');
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
         //表单验证
            $this->validate($request, [
            'link_name' => 'required',
            'url'=> 'required',
            'link_info' => 'required',

        ],[
            'link_name.required' => '商品名不能为空！',
            'url.required' => '链接地址不能为空！',
            'link_info.required' => '链接地址不能为空！',

        ]);
         //去除不需要的参数
            $res = $request->except('_token');
            //获取当前时间戳
            $res['publish_time'] = time();
            //获取友情链接的状态
            $res['status'] = "0";
            //添加至数据库
            $data = flink::insert($res);
            //判断如果成功去列表页，如果失败回到当前页面
            if($data){
                return redirect('/admin/flink/')->with('create','添加链接成功！');
            } else {
                return back()->withInput();
            }

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
        // return view('admin/flink/edit');
         //链接友情链接数据库，获取对应id的链接
        $res = flink::where('id',$id)->first();
        //进信息传递到修改页面
        return view('/admin/flink/edit',['res'=>$res]);
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
         //闪存信息，去除不要的参数
        $res = $request->except('_token','_method');
        //获取修改时间戳
        $res['publish_time'] = time();

         //数据库获取对应id的参数执行更新
        $date = flink::where('id',$id)->update($res);
        //如果更新成功返回链接列表页，否则返回当前页面。
        if ($date) {
            return redirect('/admin/flink/')->with('create','修改链接成功！');
        } else {
            return back();
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
        //
        // 获取id对数据库进行删除
        $date = flink::where('id',$id)->delete();


        //判断如果成功去列表页，如果失败回到当前页面
        if ($date) {
            return redirect('/admin/flink')->with('create','删除链接成功！');
        } else {
            return back();
        }
    }
     public function search(Request $request)
    {
        $requestall = $request->all();
        $res = flink::where('link_name','like','%'.$request->input('link_name').'%');
        $data = $res->paginate(5);
        return view('admin.flink.index',['data' => $data,'request'=>$requestall]);
    }
}
