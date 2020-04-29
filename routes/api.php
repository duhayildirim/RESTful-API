<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ornek_kullanici' , function() {
    return factory(\App\User::class, 10)->make();
}); // adres satırında api/ornek_kullanici girildiğinde factory
    // kütüphanesinde User sınıfını kullanarak 10 tane fake veri oluşturacak

Route::apiResource('/urunler' , 'Api\urunler_controller'); // Otomatik olarak benim için
                                                                          // gerekli routeları oluşturdu.
// Bu şekilde  de kullanabilirdim
// Route::apiResource([
//     'urunler' => 'Api\urunler_controller',
//     'kullanicilar' => 'Api\kullanicilar_controller',
// ]);
Route::get('/kullanicilar' , 'Api\kullanici_controller@kullanicilar');
Route::post('/kullanicilar' , 'Api\kullanici_controller@kullanici_kaydet');
Route::get('/kullanicilar/{id}' , 'Api\kullanici_controller@kullanici_goster');
Route::put('/kullanicilar/{id}' , 'Api\kullanici_controller@kullanici_guncelle');
Route::delete('/kullanicilar/{id}' , 'Api\kullanici_controller@kullanici_sil');

Route::get('/veri_goster/{id}','Api\urun_detay_controller@veri_goster');
Route::get('/sayfalandirma' , 'Api\urun_detay_controller@sayfalandirma');
Route::get('/sayfalandirma_2' , 'Api\urun_detay_controller@sayfalandirma_2');
Route::get('/filtreleme' , 'Api\urun_detay_controller@filtreleme');
Route::get('/donus_kolonu','Api\urun_detay_controller@donus_kolonu');
Route::get('/donus_kolonu_2','Api\urun_detay_controller@donus_kolonu_2');
Route::get('/resource_kullanimi_' , 'Api\urun_detay_controller@fonksiyon_1');
Route::get('/resource_collection_kullanimi' , 'Api\urun_detay_controller@fonksiyon_2');
Route::get('/resource_collection_dosyalari' , 'Api\urun_detay_controller@fonksiyon_3');
Route::get('/resource_colection_dosyalari_olmadan' , 'Api\urun_detay_controller@fonksiyon_4');
Route::get('/resource_paginated__data' , 'Api\urun_detay_controller@fonksiyon_5');


Route::get('/kategoriler' , 'Api\kategoriler_controller@kategoriler');
Route::post('/kategoriler' , 'Api\kategoriler_controller@kaydet');
Route::get('/kategori_ara/{id}' , 'Api\kategoriler_controller@goster');
Route::put('/kategori_guncelle/{id}' , 'Api\kategoriler_controller@guncelle');
Route::delete('/kategori_sil/{id}' , 'Api\kategoriler_controller@sil');
Route::get('/kategoriler/donus_kolunu' , 'Api\kategori_detay_controller@donus_kolonu');
Route::get('/kategoriler/gruplama' , 'Api\kategori_detay_controller@gruplama');

Route::get('/urune_ait_kategori' , 'Api\urunler_kategoriler@urun');



