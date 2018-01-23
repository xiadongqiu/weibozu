<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Providers\AppServiceProvider;
class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }
}
