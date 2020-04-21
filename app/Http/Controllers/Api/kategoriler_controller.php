<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\kategoriler;
use Illuminate\Http\Request;

class kategoriler_controller extends Controller
{
    public function kategoriler()
    {
        $kategoriler = kategoriler::all();

        return response()->json(['kategoriler' =>$kategoriler],200);
    }

    public function kaydet(Request $request)
    {
        $kaydedilecek_veri = $request->all();
        $veri = kategoriler::create($kaydedilecek_veri);

        return response(['eklenen veri'=>$veri]);

    }

    public function goster($id)
    {
        $aranan = kategoriler::find($id);

        return response()->json($aranan);
    }

    public function guncelle(Request $request,$id)
    {
        $girdi = $request->all();
        $guncellenen = kategoriler::find($id);
        $guncellenen -> update($girdi);

        return response()->json([
            'kategoriler' => $guncellenen ,
            'mesaj' => 'Güncelleme işlemi başarılı',
        ],201);
    }

    public function sil($id)
    {
        $silinecek_veri = kategoriler::find($id);
        $silinecek_veri -> delete();

        return response()->json([
            'mesaj' => 'Silme işlemi başarılı'
        ]);
    }
}
