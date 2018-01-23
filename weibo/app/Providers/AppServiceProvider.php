<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\user;
use App\Model\detail;
use App\Model\flink;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot(Request $request)
    {   

        // var_dump($request->all());
        // $id = $request->session()->get('admin');

        $res = user::find(1);
        $auth = array('普通用户','管理员','超级管理员');
        $res['auth'] = $auth[$res['auth']];
        view()->share('user',$res);

        
        //友情链接
        $flinks = flink::get();

        view()->share('flinks',$flinks);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
