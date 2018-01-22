<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\notice;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $requestall = $request->all();
         $data = notice::paginate(5);

        //查询数据库notices表里所有的数据
        // $res = notice::get();
        // dd($res);
         return view('admin/notice/index',['data' => $data,'request'=>$requestall]);


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/notice/add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // 正则验证
        $this->validate($request,[
                'title' => 'required',
                'content' => 'required',
            ],[
                'title' => '*公告标题不能为空*',
                'content.required' => '*公告内容不能为空*'
            ]);
        
        // 接收页面传过来的数据信息
        $res = $request->except('_token');
         
        // 添加时间戳/
        $res['announcement_time'] = time();
        
        // 将数据添加到数据库
        $data = notice::insert($res);
         if($data){
             return redirect('admin/notice');
         } else {
             return back();
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
        //从notice表查到要修改的数据
        $res = notice::where('id',$id)->first();
        return view('/admin/notice/edit',['res'=>$res]);
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
        
         // 接收从页面发送的新值
       $res = $request->except('_token','_method');

       // 创建时间戳
       $res['announcement_time'] = time();
       
       //条件判断当前修改ID与新传的值ID一致更新数据库对应内容
       $data = notice::where('id',$id)->update($res);

        if ($data) {
            //更新成功后返回列表页面
            return redirect('/admin/notice/');
        } else {

            //不成功则返回修改页面
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
        // 条件判断当前ID与页面要删除的值ID一致删除对应ID数据
        $data = notice::where('id',$id)->delete();
        echo 1;
    }
    public function search(Request $request)
    {
        $requestall = $request->all();
        $res = notice::where('title','like','%'.$request->input('title').'%');
        $data = $res->paginate(5);
        return view('admin.notice.index',['data' => $data,'request'=>$requestall]);
    }
}
