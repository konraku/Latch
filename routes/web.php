<?php

use Illuminate\Support\Facades\Route;

// Vue.jsアプリ用のルート（すべてのパスをVue.jsに任せる）
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');