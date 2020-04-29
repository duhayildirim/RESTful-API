<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class kullanici_controller extends Controller
{
    public function kullanicilar()
    {
        $kullanicilar = User::all();
        /*  $kullanicilar->each(function ($kullanici)
            {
            $kullanici->setAppends(['full_name']);
            });
        */
        // tüm kullanıcıları tek tek dolaşarak full_name kolonunu eklemiş append etmiş oluyorum
        //bu yapıyı kullanabilmek için User modelindeki $appends tanımımı devre dışı bırakmam gerek
        return response()->json($kullanicilar,200);
    }

    public function kullanici_kaydet(Request $request)
    {
        $kaydet = $request->all();
        $veri = User::create($kaydet);

        return response() -> json($veri);
    }
    public function kullanici_goster($id)
    {
        $goster = User::find($id);

        return response() -> json($goster);
    }
    public function kullanici_guncelle(Request $request,$id)
    {
        $yeni = $request -> all();
        $guncelle = User::find($id);
        $goster = $guncelle -> update($yeni);

        return response()->json(['mesaj' => "Güncelleme başarılı",'data' => $goster ],200);
    }
    public function kullanici_sil($id)
    {
        $silinecek = User::find($id);
        $silinecek -> delete();

        return response()->json(['mesaj' => 'Silme İşlemi Başarıyla Gerçekleşti']);
    }
}
