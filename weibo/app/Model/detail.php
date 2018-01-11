<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne('App\Model\user','id');
    }

}
