<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    //属于===评论属于用户详情
    public function detail()
    {
        return $this->belongsTo('App\Model\detail','uid');
    }
}
