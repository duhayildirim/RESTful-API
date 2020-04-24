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
}
