<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategoriler extends Model
{
    use SoftDeletes;

    protected $table = "kategoriler";

    protected $guarded = 'silinme_tarihi';

    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    public static function truncate()
    {
    }
}
