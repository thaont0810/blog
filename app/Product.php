<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    public function Category(){
        return $this->belongsTo('App\Category','cate_id','product_id');
    }
}
