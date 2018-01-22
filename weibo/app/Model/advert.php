<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class advert extends Model
{
    //
    public $table = 'adverts';
    protected $fillable = ['id','content','advertising','url','status','picture'];
    public $timestamps = false;
}
