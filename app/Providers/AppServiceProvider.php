<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $cate = Category::all();
            
            $view->with('category',$cate);
        });
        view()->composer('header',function($view){
            if(Session('cart')){
                //Lấy giỏ hàng hiện tại gán vào giỏ hàng cũ 
                $oldCart = Session::get('cart');
                $cart = new Cart('$oldCart');
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cate->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
