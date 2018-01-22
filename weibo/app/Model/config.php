<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    //
    public $table = 'configs';
    protected $fillable = ['id','status','logo','copyright','webname','keyword','content'];
    public $timestamps = false;
}
