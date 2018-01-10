<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class weibo extends Model
{
    
    //属于===微博属于用户
    public function user()
    {
        return $this->belongsTo('App\Model\user','uid');
    }

    //属于===微博属于用户详情
    public function detail()
    {
        return $this->belongsTo('App\Model\detail','uid');
    }

    
}
