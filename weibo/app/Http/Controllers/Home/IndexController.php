<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\attention;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $uid = 2;
        //找出关注表中的所有关注的人的gid
        $gids = [];
        $attention = attention::where('uid',$uid)->get();
        foreach ($attention as $key => $value) {
            $gids[] = $value;
        }
        dd($gids);

        return view('Home.index.index');
    }

    
}
