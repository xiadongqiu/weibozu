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
    	// $config = config::first();

    	return view('admin/config/edit');
    	//

    }
}
