<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    // public function user(){
    //     return $this->hasMany('App\User','cate_id','cate_id');
    // }
}
