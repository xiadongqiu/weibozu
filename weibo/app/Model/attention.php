<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class attention extends Model
{
    public $timestamps = false;

    //多对多
    public function detail()
    {
        return $this->belongsToMany('App\Model\detail','uid','gid');

    }

}
