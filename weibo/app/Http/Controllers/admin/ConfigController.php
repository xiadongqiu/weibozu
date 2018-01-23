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



     public function postSte(Request $request)
    {
        
        //判断是否有修改图片
        $pic = $request->only('logo')['logo'];
        
        if($pic != null){
            // 获取文件的目录
            $pic = $request->only('logo')['logo'];
            // dd($pic);
            $disk = \Storage::disk('qiniu');
            $pat = $pic->getClientOriginalExtension();
            $fileName = md5(rand(0000,9999)).'.'.$pat;
            $path = $pic->getRealPath();
            $disk -> put($fileName,fopen($path,'r+'));
            $jieguo->logo  = $fileName;
        }

        $config = $request->all();
        // dd($_FILES);
        // dd($config);
        $jieguo = config::first();
        $jieguo->webname = $config['webname'];
        $jieguo->content = $config['content'];
        $jieguo->keyword = $config['keyword'];
        $jieguo->copyright = $config['copyright'];
        $jieguo->status = $config['status'];

        $final = $jieguo->save();

        if($final){
            echo "<script>alert('恭喜，修改成功！');location.href='/admin/config'</script>";
        }else{
            echo "<script>alert('抱歉，修改失败！');location.href='/admin/config'</script>";

        }


    }


}
