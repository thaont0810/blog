<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//query theo dang sql
use Illuminate\Http\Request;
use App\Products;
use App\News;

class newsController extends Controller
{
    public function getInfo() {
    	//get news
       	$news = DB::table('news')
       	->join('users','users.id','=','news.user_id')
       	->select('news.*','users.name')->get();
       	//get product
        $new_prod = Products::where('new','1')->get();
        $top_prod = Products::where('top_product','1')->get();
        return view('main.news',compact('slide','new_prod','top_prod','news'));
        
    }
    public function getDetail($id) {
    	$new = DB::table('news')
        ->join('users','users.id','=','news.user_id')
        ->where('news.news_id','=',$id)
        ->select('news.*','users.name')->get();

        $new_prod = Products::where('new','1')->get();
        $top_prod = Products::where('top_product','1')->get();
        return view('main.detail', compact('slide','new_prod','top_prod','new'));
    }
}
