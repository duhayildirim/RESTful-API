<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\kategoriler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategori_detay_controller extends Controller
{
    public function donus_kolonu()
    {
        //burada tüm tabloyu çekmek yerine sadece istediğim kolonları çekeceğim
        $ids =kategoriler::pluck('ad' , 'id');
        //değer=ad , key=id
        return response()->json(['idler' => $ids]);
    }

    public function gruplama()
    {
        //kategorilerdeki ürün sayılarını rapor olarak veren fonksiyonu yazıyorum
        $veriler = DB::table('urunler_kategoriler as uk') //hangi tablo üzerinde işlem yapacağımı yazdım
                    ->selectRaw('k.ad , COUNT(*) as toplam')//*SON OLARAK*Ekrana çekerken neleri çekeceğimi burda belirtiyorum
                    ->join('kategoriler as k' , 'k.id' , '=' , 'uk.kategori_id')//join ile ilişkili tablolarımı tanımlıyorum
                    ->join('urunler as u' , 'u.id' , '=' , 'uk.urun_id')//bir nevi birleştiriyorum
                    ->groupBy('k.ad')//neye göre bir gruplama yapacağımı belirtiyorum
                    ->orderByRaw('COUNT(*) DESC')//sql ifadesini tek tırnakta kullanabilmek için orderbyraw kullandım
                    ->get();

        return response()->json($veriler->all());
        //hangi kategoriye ait kaç tane ürün var getirmiş oldum
    }
}
