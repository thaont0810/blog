<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $primaryKey = 'product_id';
    public function Category(){
        return $this->belongsTo('App\Category','cate_id','product_id');
    }
}
