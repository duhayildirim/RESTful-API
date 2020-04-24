<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\kategoriler;
use Illuminate\Http\Request;

class kategori_detay_controller extends Controller
{
    public function donus_kolonu()
    {
        //burada tüm tabloyu çekmek yerine sadece istediğim kolonları çekeceğim
        $ids =kategoriler::pluck('ad' , 'id');
        //değer=ad , key=id
        return response()->json(['idler' => $ids]);
    }
}
