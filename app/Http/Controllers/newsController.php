<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class newsController extends Controller
{
    public function getInfo() {

        $new_prod = Product::where('product_condition','1')->get();
        $top_prod = Product::where('top_product','1')->get();
         return view('main.news',compact('slide','new_prod','top_prod'));
        
    }
    public function getDetail() {
        return view('main.detail');
    }
}
