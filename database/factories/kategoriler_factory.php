<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\kategoriler::class, function (Faker $faker) {
    return [
        'ad' => $faker -> sentence(1),
    ];
});
