<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/hello', function () {
    return view('welcome');
});

Route::get('index','IndexController@getIndex')->name('index');
Route::get('category/{type}','CategoryController@getCate')->name('category');
Route::get('product','ProductController@getProduct');
Route::get('detail','detailController@getDetail')->name('contact');
Route::get('about','aboutController@getAbout')->name('about');
Route::get('signup','signupController@signup')->name('signups');
Route::post('signup','signupController@postsignup')->name('signup');
Route::get('login','loginController@login')->name('login');
Route::get('product-detail/{id}','ProductController@getDetail')->name('product_detail');
Route::get('search','IndexController@getSearch')->name('search');
Route::post('login', 'loginController@postLogin');
Route::get('add-to-cart/{id}',[
    'as'=>'addcart',
    'uses'=>'IndexController@getCart'
]);

Route::get('delete-cart/{id}',[
    'as'=>'deletecart',
    'uses'=>'IndexController@deleteCart'
]);

Route::get('checkout',[
    'as'=>'checkout-cart',
    'uses'=>'IndexController@checkout'
]);

Route::post('checkout',[
    'as'=>'checkout-cart',
    'uses'=>'IndexController@postCheckout'
]);

Route::get('news','newsController@getInfo')->name('news');
Route::get('news-detail/{id}','newsController@getDetail')->name('detail-news');
