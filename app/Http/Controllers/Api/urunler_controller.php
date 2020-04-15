<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\urunler;
use Illuminate\Http\Request;

class urunler_controller extends Controller
{
    // php artisan make:controller Api\urunler_controller --api --model=Models\urunler

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //veri tabanındaki tüm ürünleri kullanıcıya veriyorum
        // return urunler::all(); //diyebilirim zaten laravel content type json gönderecek
        // return response(urunler::all(),200); // da diyebilirdim
        return response()->json(urunler::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $girdi = $request->all();
        $urun = urunler::create($girdi);
//        $girdi = new urunler();
//        $girdi -> fill($request->all());
//        $girdi -> save();

        return response()->json($urun,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\urunler  $urunler
     * @return urunler
     */
    public function show(urunler $urunler)
    {
        //bir daha veri tabanında aramakla uğraşmadım
        // return response($urunler , 200);
        // return response()->json($urunler , 200);
         return $urunler;
    }

    public function urunu_goster($id)
    {
        $urun = urunler::find($id);
        if(isset($urun))
        {
            return response()->json($urun,200);
        }
        else
        {
            return response()->json(['mesaj' => 'yok yok ürün yok'],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\urunler  $urunler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, urunler $urunler)
    {
        $girdi = $request->all();
        $urunler -> update($girdi); //put methodu kullanır

        return response([
           'ürün' => $urunler,
           'mesaj' => 'Ürün güncellendi'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\urunler $urunler
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(urunler $urunler)
    {
        $urunler -> delete(); //delete http methodunu kullanır

        return response([
            'mesaj' => 'Ürün başarıyla silindi'
        ],200);
    }
}
