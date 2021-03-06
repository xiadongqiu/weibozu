<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\weibo;
use App\Model\comment;
use App\Model\report;
use App\Model\like;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $requestall = $request->all();
        $data = weibo::paginate(10);
        
        return view('admin/post/list',['data'=>$data,'request'=>$requestall]);
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
    $data = weibo::where('id',$id)->delete();
    if($data){
         $res = comment::where('wid',$id)->delete();
         $res = like::where('wid',$id)->delete();
         $res = report::where('wid',$id)->delete();
        if($res){
            echo 1;
        }else{
            echo 1;
        }
    }else{
        echo 0;
    }    
    }
    public function search(Request $request)
    {
        $requestall = $request->all();
        $res = weibo::where('nickname','like','%'.$request->input('nickname').'%');
        $data = $res->paginate(10);
        return view('admin/post/list',['data'=>$data,'request'=>$requestall]);
    }
}
