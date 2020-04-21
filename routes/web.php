<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/urunler','urun_controller'); //bu method benim yerime bütün istekleri otomatik olarak oluşturuyor

// php artisan route:list //dedikten sonra tüm routeları görebilirsin

// Route::resource('/urunler','urun_controller')->only(['index','show']);
//only diyerek sadece index ile show methodlarını kullanacağımı belirtiyorum

// Route::resource('/urunler','urun_controller')->except(['destroy']);
//destroy harici bütün methodları kullanmak istiyorum


//Route::prefix('ornekler')->group(function () {
//    Route::get('/merhaba', function () {
//        return "merhaba api";
//    });
//    Route::get('/json' , function () {
//        return ['json' => "hello api"];
//    });
//    Route::get('/response' , function () {
//        return response(['response' => "new api"],200)->header('Content Type','application/json');
//    })
//    Route::get('/json2' , function () {
//        return response()->json(['json2'=>"hello api 2"],200);
//    });
//    Route::get('/product/{id}' , function ($id) {
//        return "product id:$id";
//    });
//    Route::get('product/{id}/{type?}' , function ($id,$type = '') {
//        return "$id numarılı $type kesim ürün";
//    });
//});


