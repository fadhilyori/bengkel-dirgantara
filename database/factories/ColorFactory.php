<?php

use Faker\Generator as Faker;

$factory->define(\App\Warna::class, function (Faker $faker) {
    return [
        'warna'=>$faker->colorName,
    ];
});
