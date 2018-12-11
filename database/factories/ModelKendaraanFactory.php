<?php

use Faker\Generator as Faker;

$factory->define(\App\ModelKendaraan::class, function (Faker $faker) {
    return [
        'nama_model'=>$faker->company
    ];
});
