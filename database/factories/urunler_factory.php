<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\urunler::class, function (Faker $faker) {

    return [
        'ad' => $faker -> name,
        'fiyat' => mt_rand(10,200) /10 ,
        'aciklama' => $faker -> sentence(10)
    ];

});
