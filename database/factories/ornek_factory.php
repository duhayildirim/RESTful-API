<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ornek_model_sinifi::class, function (Faker $faker) {
    $ornek = $faker -> sentence(3); // 3 kelimeden oluşan bir cümle
    return [
        'isim' => $ornek,
        'slug' => Str::slug($ornek),
        'aciklama' => $faker -> paragraph(5), // 5 cümleden oluşan paragraf
        'sifre' => Str::random(10),
        'fiyat' => mt_rand(10,100) / 10                 // 10 ile 100 arası küsüratlı değer
        // 'first_name' => $faker->(burada ctrl+space yaparak faker kütüphanesinde neleri kullanabileceğini görebilirsin)
    ];

    // $ornek_veri = factory(App\ornek_model_sinifi::class , 500)->create() //tinkerda diyerek 500 tane fake veri oluşturabilirim
    // yada database seeder içine // factory(ornek_model_sinifi , 25)->create(); //derim ve her seeder çalıştığında 25 fake veri oluşur
});
