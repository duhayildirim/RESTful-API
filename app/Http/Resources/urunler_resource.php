<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
class urunler_resource extends JsonResource
{

     // php artisan make:resource diyerek dosyamı Http\Resource altına oluşturdum
     // resource tanımları kolon özelleştirme,dönüştürme işlemlerini ayrı dosyalarda tutar böylelikle
     // bir kere tanımladığımız resource her yerde kullanabiliriz
    //  JsonResource sınıfından kalıtımla oluşturulmuş toArray sınıfını kullandık
    public function toArray($request)
    {
        return [
            'id' => $this -> id,
            'name' => $this -> ad, // bu isteğin içine bak ad varsa onu name olarak dön
            'price' => $this -> fiyat
        ];
    }
}
