<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CategoryController extends Controller
{
    public function getCate($type){
        $allCate = Category::all();
        $category = Product::where('cate_id',$type)->get();
        $new_prod = Product::where([['cate_id',$type],['new_product','1']])->get();
        $top_prod =  Product::where([['cate_id',$type],['product_condition','1']])->get();
        return view ('main.category',compact('category','new_prod','top_prod','new_fish','allCate'));
    }
}
