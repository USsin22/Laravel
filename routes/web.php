<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/','home')->name('home');
Route::get('/test', function (){
    return('hello world');
});











Route::get('blog/{id?}',function(?string $id = null){
    return("blog id is {$id}");
});

Route::get('product/{id}', function(?string $id = null){
return ("product id is  " .($id ? $id :'not found'));

})->whereNumber('id','[0-9]+');

Route::get('user/{user_name}', function (?string  $username = null){
    return("user name is {$username}");
})->whereAlpha('user_name','[a-zA-Z]+');


Route::get('user/{user_name}/{id}', function (?string  $username = null, ?string $id = null){
    return("user name is {$username} and id is {$id}");
})->whereAlphaNumeric('user_name')->whereNumber('id','[0-9]+');

Route::get('lang/{Lang}/{product}', function(String $lang , String $product){

    return("lang is {$lang} and ". ($product ? "product is {$product}" : 'not found '));
})->whereIn('Lang',['en','ka','fr', 'in','ar'])
->whereNumber('product','[0-9]+')
;

Route::get("/serach/{query}/{id}", function(String $query, String $id){
    dd("query is {$query} and id is {$id}");
    return("query is {$query} and id is {$id}");
})->where(['query'=>'[a-zA-Z0-9]+'], ['id'=>'[0-9]{2,}']);


Route::view('/contact','contact')->name('contact');


Route::get("/{web}", function($web){
    return("web is {$web}");
});

Route::get("/{yassine}/{id}", function($yassine, $id){
    return("web is {$yassine} and id is {$id}");
});

Route::prefix('/admin')->group(function(){
    Route::get('/users', function(){
        return('admin users');
    })->name('admin.users');
});


Route::get("/calc/{a}/{b}", function(float $a ,float $b){
    return("a + b =". $a+$b);
});


// 404

Route::fallback(function(){
    return('404 not found');
});