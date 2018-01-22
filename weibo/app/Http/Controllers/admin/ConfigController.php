<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\config;

class ConfigController extends Controller
{
    public function edit()
    {
    	//获取 网站配置
    	$config = config::where('status','1')->first();

    	return view('admin/config/edit',['config'=>$config]);  	
    }


    //执行修改功能
    public function update(Request $request)
    {
    	//获取修改后的信息
    	$config = $request->except('_token');
    	//修改数据库
    	$data = config::where('id',1)->update($config);
    	
    	 if($data){
            return redirect('/admin/config/')->with('msg','网站配置修改成功！');
        } else {
            return redirect('/admin/config/')->with('msg','网站配置修改失败！');

        }  

    }

}
