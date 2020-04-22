<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class urunler extends Model
{
    use SoftDeletes;

    protected $table = "urunler";

    protected $fillable = ['ad' ,'fiyat' ,'aciklama'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

}
