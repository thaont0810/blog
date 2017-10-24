<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function getProduct() {
        return view ('main.product');
    }
   public function getDetail(Request $req){
       $prod_detail = Products::where('id',$req->id)->first();
       $compa = Products::where('cate_id',$prod_detail->cate_id)->paginate(3);
       $new_prod = Products::where('new',1)->get();
       $top_prod = Products::where('top_product',1)->get();
       return view('main.productDetail',compact('prod_detail','compa','new_prod','top_prod'));
      
   }
}
