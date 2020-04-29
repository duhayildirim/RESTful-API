<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class urunlerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // ResourceCollection dan kaltımla oluşturulmuş toArray kullanacağım
    // dönüş değerleri otomatik olarak data kapsayıcısı içinde gelir
    // data özelliğiyle birlikte başka ek özelliklerde göndermek istersek(meta vb.) resource tanımları tek başına yeterli olmaz
    // data özelliğiyle birlikte ek kolon yardımların resource collection dosyalarından faydalanıyoruz

    public $collects = 'App\Http\Resources\urunler_resource';

    public function toArray($request)
    {
        return[
            'data' => $this->collection, //urunler_resource 'den dataları alacak
            'meta' => [
                'toplam_urun' => $this -> collection -> count(),
                'custom' => 'value'
            ]
        ];
    }
}
