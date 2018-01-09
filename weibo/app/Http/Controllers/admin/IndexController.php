<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;

class IndexController extends Controller
{
    public function index(Request $request)
    {
    	// $id = $request->session()->get('admin');
    	// $res = user::find($id);
    	// $auth = array('普通用户','管理员','超级管理员')
        return view('admin.index');
    }
}
