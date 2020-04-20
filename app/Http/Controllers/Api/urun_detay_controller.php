<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\urunler;
use Illuminate\Http\Request;

class urun_detay_controller extends Controller
{
    public function veri_goster($id)
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

    public function sayfalandirma()
    {
        // ürünleri sayfalandırarak ekranda göstermek için bir fonksiyon yazıyorum

        return response(urunler::paginate(10), 200);
        // ilk on ürünü seçtim
        // paginate komutu kendisi ile birlikte özel anahtar kelimeler ile birlikte gelmektedir
        // bunlar current_page , data , last_page_url , next_page_url , path , total ...
    }

    public function sayfalandirma_2(Request $request)
    {
        // Gelen isteğe göre ne kadar veri göstermem gerekiyorsa ona göre fonksiyon yazıyorum
        // önce offset limit değerlerinin dolu gelip gelmediğini kontrol etmeliyim

        $offset = $request->has('offset') ? $request->offset : 0 ;
        $limit = $request->has('limit') ? $request->limit : 10 ;
        //offset=5&limit=3 idsi 6 olandan başla 9 a kadar getir
        return response(urunler::offset($offset)->limit($limit)->get(),200);
    }

    public function filtreleme(Request $request)
    {
        // gelen isteğe göre verileri filtreleyen ve sayfalandıran fonksiyonu yazıyorum
        // Query Builder (sorgu oluşturucu)

        $offset = $request->has('offset') ? $request->query('offset') : 0 ;
        $limit = $request->has('limit') ? $request->query('limit') : 10 ;

        $list = urunler::query(); //Boş bir query builder yapısı oluşturdum

        if($request -> has('deger')) // içinde q harfi geçen veriler varsa alıyorum
        {
            $list->where('ad' , 'like' , '%' . $request->query('deger') . '%');
            //list üzerinden bir sorgu yazdım
        }
        if ($request ->has('sirala')) // ardından bu verileri tersten sıralıyorum
        {
            $list->orderBy($request->query('sirala'), $request->query('sort' , 'DESC'));
            //list üzerinden tersten (büyükten küçüğe) sıralayan bir sorgu yazdım
        }
        //artık filtreleme işleminin sonucuna göre bir offset limit işlemi gerçekleştirecem
        $veri = $list->offset($offset)->limit($limit)->get();

        return response($veri , 200);
        //api/filtreleme?deger=o içinde o harfi geçenleri getirdi
    }
}
