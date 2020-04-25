<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class urunler_kategoriler extends Model
{
    use SoftDeletes;

    protected $table = "urunler_kategoriler";

    protected $fillable = ['urun_adi','kategori_adi'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    // bir tabloda kolonların gizli kalmasını veri çekme durumunda
    // gelmemesini istiyorsan >  protected $hidden = ['urun_adi' ,'fiyat'];  <  kullanırım
    // bunun yerine veriyi dönüş yaptığım fonksiyonda gizlemeyi tercih ederim (kategoriler_controller@kategoriler)
}
