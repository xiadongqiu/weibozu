<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\config;

class ConfigController extends Controller
{
    public function getIndex()
    {

         $config = config::first();
        return view('admin/config/index',['config'=>$config]);
    	//获取 网站配置
    	// $config = config::where('status','1')->first();

    	// return view('admin/config/index',['config'=>$config]);  	
    }


    // //执行修改功能
    // public function update(Request $request)
    // {
    // 	//获取修改后的信息
    // 	$config = $request->except('_token');
    // 	//修改数据库
    // 	$data = config::where('id',1)->update($config);
    	
    // 	 if($data){
    //         return redirect('/admin/config/')->with('msg','网站配置修改成功！');
    //     } else {
    //         return redirect('/admin/config/')->with('msg','网站配置修改失败！');

    //     }  

    // }

     public function postSte(Request $request)
    {
        //
        // echo 'store';
        $config = $request->all();
        // dd($_FILES);
        // dd($config);
        $jieguo = config::first();
        $jieguo->webname = $config['webname'];
        $jieguo->content = $config['content'];
        $jieguo->keyword = $config['keyword'];
        $jieguo->copyright = $config['copyright'];
        $jieguo->status = $config['status'];
       
       //检测是否有文件logo
        if($request->hasFile('logo')){
            $logo = $request->file('logo');

            // 获取文件的目录
             // $url = public_path().'/uploads/'.date('Ymd');
             $url = './uploads/logo/'.date('Ymd');

             // 获取文件名字
             $name = 'img'.date('YmdHis').rand(10000,99999);
             $houzhui = $logo->getClientOriginalExtension('logo');
             // dd($name);
             $filename = $name.'.'.$houzhui;
             // dd($filename);

             // 执行上传到指定目录，并且重新命名
            $data = $logo->move($url,$filename);

            // 将文件的完整路径赋值给要更新的变量，数据库中的logo
            $jieguo->logo = $url.'/'.$filename;

            // dd($jieguo->logo);

            if($data){
                echo "<script>alert('上传成功');</script>";
            }else{
                echo "<script>alert('上传失败');</script>";

            }
        }



        $final = $jieguo->save();
        if($final){
            echo "<script>alert('恭喜，修改成功！');location.href='/admin/config'</script>";
        }else{
            echo "<script>alert('抱歉，修改失败！');location.href='/admin/config'</script>";

        }


    }


}
