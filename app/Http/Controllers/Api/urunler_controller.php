<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\urunler;
use Illuminate\Http\Request;

class urunler_controller extends Controller
{
    // php artisan make:controller Api\urunler_controller --api --model=Models\urunler

    public function index()
    {
        // veri tabanındaki tüm ürünleri kullanıcıya veriyorum
        // return urunler::all(); diyebilirim zaten laravel content type json gönderecek
        // return response(urunler::all(),200); da diyebilirdim

         return response()->json(urunler::all(),200);
    }

    public function store(Request $request)
    {
        $girdi = $request->all();
        urunler::create($girdi);

//          $new = new urunler();
//          $new -> fill($request->all());
//          $new -> save();

        return response()->json(urunler::all());
    }

    public function show(urunler $urunler)
    {
        //bir daha veri tabanında aramakla uğraşmadım
        // return response($urunler , 200);
        // return response()->json($urunler , 200);
         return $urunler;
    }

    public function update(Request $request, urunler $urunler)
    {
        $girdi = $request->all();
        $urunler -> update($girdi); //put methodu kullanır

        return response([
           'ürün' => $urunler,
           'mesaj' => 'Ürün güncellendi'
        ], 200);
    }

    public function destroy(urunler $urunler)
    {
        $urunler -> delete(); //delete http methodunu kullanır

        return response([
            'mesaj' => 'Ürün başarıyla silindi'
        ],200);
    }
}
