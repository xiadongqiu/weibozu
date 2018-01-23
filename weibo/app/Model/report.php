<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
      public function detail()
    {
        return $this->belongsTo('App\Model\detail','uid');
    }
      public function weibo()
    {
        return $this->belongsTo('App\Model\weibo','wid');
    }
}
