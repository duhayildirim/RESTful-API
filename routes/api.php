<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ornek' , function() {
    return factory(\App\User::class, 10)->make();
});

Route::get('/urunu_goster/{id}','Api\urunler_controller@urunu_goster');
Route::apiResource('/urunler' , 'Api\urunler_controller');

//  2 FARKLI ŞEKİLDE KULLANABİLİRSİN
// Route::apiResource([
//     'urunler' => 'Api\urunler_controller',
//     'kullanicilar' => 'Api\kullanicilar_controller',
// ]);
