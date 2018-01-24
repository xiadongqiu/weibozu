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
         //dump($res);
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
        $data = $request->except('_token','picture');
        $pic = ($request->only('picture')['picture']);

        $disk = \Storage::disk('qiniu');

        $pat = $pic->getClientOriginalExtension();

        $fileName = md5(rand(00000000,99999999)).'.'.$pat;

        $path = $pic->getRealPath();

        $disk -> put($fileName,fopen($path,'r+'));

        $data['picture'] = $fileName;

        $res = advert::insert($data);
        if($res){
            echo "<script type='text/javascript'>alert('添加成功');location.href='/admin/advert/'</script>";
        }else{
            echo "<script type='text/javascript'>alert('添加失败');location.href='/admin/advert/'</script>";
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
        $data = advert::where('id',$id)->first();

        if($data->status == 0 ){
            $data->status = 1;
            $data->save();
            echo 1;
        }else if($data->status == 1){
            $data->status = 0;
            $data->save();
            echo 0;
        }

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
        $data = advert::where('id',$id)->first();
        //将数据传递到修改页面
        return view('/admin/advert/edit',['data'=>$data]);
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
        if($request->only('picture')['picture']){

            $data = $request->except('_token','picture','_method');

            $pic = $request->only('picture')['picture'];

            $disk = \Storage::disk('qiniu');

            $pat = $pic->getClientOriginalExtension();

            $fileName = md5(rand(00000000,99999999)).'.'.$pat;

            $path = $pic->getRealPath();

            $disk -> put($fileName,fopen($path,'r+'));

            $data['picture'] = $fileName;

            $res = advert::where('id',$id)->update($data);

            if($res){
                echo "<script type='text/javascript'>alert('修改成功');location.href='/admin/advert/'</script>";
            }else{
                echo "<script type='text/javascript'>alert('修改失败');location.href='/admin/advert/'</script>";
            }
        }else{

            $data = $request->except('_token','picture','_method');

            $res = advert::where('id',$id)->update($data);
            if($res){
                echo "<script type='text/javascript'>alert('修改成功');location.href='/admin/advert/'</script>";
            }else{
                echo "<script type='text/javascript'>alert('修改失败');location.href='/admin/advert/'</script>";
            }
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
        
    

        //删除数据库指定id的信息
        $info = advert::where('id',$id)->delete();
    }
}
