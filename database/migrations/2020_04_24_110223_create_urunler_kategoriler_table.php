<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUrunlerKategorilerTable extends Migration
{

    public function up()
    {
        Schema::create('urunler_kategoriler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('urun_id')->unsigned();
            $table->bigInteger('kategori_id')->unsigned();
            $table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarihi')->nullable();

            /*
              migration da foreign (ilişkilendirme) gerçekleştireceğim
              Benim urun_id değerim , urunler tablosunun id'si ile ilişkili diyorum
              bir silme işlemi gerçekleştiğinde cascade modu ile çalışmasını istiyorum ki
              urunler tablosundan bir veri silindiği an urunler_kategoriler tablosunda da silinsin
            */
            $table->foreign('urun_id')->references('id')->on('urunler')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategoriler')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('urunler_kategoriler');
    }
}
