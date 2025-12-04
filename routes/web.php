<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('test');
});
*/

// Vue.jsアプリ用のルート（すべてのパスをVue.jsに任せる）
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');