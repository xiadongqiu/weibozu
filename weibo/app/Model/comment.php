<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //属于===评论属于微博
    public function comment()
    {
        return $this->belongsTo('App\Model\comment','wid');
    }
}
