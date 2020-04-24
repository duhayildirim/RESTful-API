<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\urunler;
use Illuminate\Http\Request;

class urunler_kategoriler extends Controller
{
    public function urun(Request $request)
    {
        $offset = $request->has('offset') ? $request->query('offset') : 0;
        $limit = $request->has('limit') ? $request->query('limit') : 10;

        $querybuilder = urunler::query()->with('kategoriler');
        // urunlere ait ilişkili olan tüm kategorileri de çekmiş oldum
        // yani gelen ürün hangi kategorilerde varsa o da gelecek
        if($request->has('aranan'))
        {
            $querybuilder->where('name','like','%' . $request->query('a'). '%');
        }
        if($request->has('sirala'))
        {
            $querybuilder->orderBy($request->query('sirala'), $request->query('sort' , 'DESC'));
        }

        $veri = $querybuilder->offset($offset)->limit($limit)->get();

        return response()->json(['data' => $veri],200);
    }
}
