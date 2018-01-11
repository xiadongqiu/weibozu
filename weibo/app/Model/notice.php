<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    //
    public $table = 'notices';
    protected $fillable = ['id','content','announcement_time'];
    public $timestamps = false;
}
