<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return('hello world');
});
Route::get("/product/{id}", function(string $id){
    return ("product id is {$id}");
});











Route::get('blog/{id?}',function(?string $id = null){
    return("blog id is {$id}");
});

    