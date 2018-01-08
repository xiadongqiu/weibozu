<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }
    public function login(Request $Request)
    {
        $request->session()->put('admin', 'value');
        return redirect('admin/index');
    }
}
