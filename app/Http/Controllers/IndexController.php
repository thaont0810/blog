<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Cart;
use Session;



class IndexController extends Controller
{
    public function getIndex() {
        $slide = Slide::all();
        $new_prod = Product::where('product_condition','1')->get();
        $top_prod = Product::where('top_product','1')->paginate(4);
  
         return view('main.main',compact('slide','new_prod','top_prod'));
    }

    public function getAddtoCart(Request $rq,$id){
        $prod = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($prod,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getSearch(Request $req){
        $prod = Product::where('product_name','like','%'.$req->keyword.'%')->orWhere('promotion_price',$req->keyword)->get();
        return view('main.search',compact('prod'));
    }
}
