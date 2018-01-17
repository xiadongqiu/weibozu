<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class advert extends Model
{
    //
    public $table = 'advert';
    protected $fillable = ['id','content','advertising','url','status','picture'];
    public $timestamps = false;
}
