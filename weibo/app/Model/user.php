<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //

    //一对多
    public function weibo()
    {
        return $this->hasMany('App\model\weibo','uid');
    }

    //一对一
    public function detail()
    {
        return $this->hasOne('App\model\detail','uid');
    }

}
