<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Category;

class CategoryController extends Controller
{
    public function getCate($type){
        $allCate = Category::all();
        $category = Products::where('cate_id',$type)->get();
          $new_prod = Products::where([['cate_id',$type],['new',1]])->get();
         
          $top_prod = Products::where([['cate_id',$type],['top_product',1]])->get();
        return view ('main.category',compact('category','new_prod','top_prod','allCate'));
    }
}
