<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class flink extends Model
{
    //
    public $table = 'flinks';
    protected $fillable = ['id','link_name','url','publish_time','link_info','status'];
    public $timestamps = false;

}
