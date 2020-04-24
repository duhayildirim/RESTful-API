<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class urunler extends Model
{
    use SoftDeletes;

    protected $table = "urunler";

    protected $fillable = ['ad' ,'fiyat' ,'aciklama'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function kategoriler()
    {
        return $this ->hasMany(urunler_kategoriler::class,'urun_id');
    }


    //bir ürüne ait kategorileri çekmek için bir fonksiyon yazıyorum
    /*
       bu fonksiyon urunler_kategoriler tablosuna gidecek
       daha sonra içinde olduğumuz urunler modeline ait kayıtları çekecek
       bu kayıtlara ait kategorileride kategoriler model sınıfı ile birlikte
       çekmiş olacaktır
    */
    //çok a çok ilişki
//    public function kategoriler()
//    {
//        return $this ->belongsToMany('kategoriler','urunler_kategoriler','urun_adi','kategori_id');
//    }
}
