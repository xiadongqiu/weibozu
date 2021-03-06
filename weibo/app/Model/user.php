<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{

    public $timestamps = false;

    //一对多
    public function weibo()
    {
        return $this->hasMany('App\Model\weibo','uid');
    }

    //一对一
    public function detail()
    {
        return $this->hasOne('App\Model\detail','uid');
    }

    public function like()
    {
        return $this->belongsToMany('App\Model\weibo','likes','lid','wid');

    }

    //多对多
    public function attention()
    {
        return $this->belongsToMany('App\Model\user','attentions','gid','uid');

    }

    //多对多
    public function attentions()
    {
        return $this->belongsToMany('App\Model\user','attentions','uid','gid');

    }

    //一对多
    public function attent()
    {
        return $this->hasMany('App\Model\attention','gid');
    }


}


