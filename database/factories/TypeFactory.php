<?php

use Faker\Generator as Faker;

$factory->define(\App\TypeKendaraan::class, function (Faker $faker) {
    return [
        'type'=>$faker->randomAscii
    ];
});
