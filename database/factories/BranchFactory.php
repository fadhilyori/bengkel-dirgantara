<?php

use Faker\Generator as Faker;

$factory->define(\App\Branch::class, function (Faker $faker) {
    $pemimpin = \App\Pegawai::all()->pluck('id')->toArray();
    return [
        'name' => $faker->company,
        'alamat' => $faker->address,
        'latitude' => (string)$faker->latitude,
        'longitude' => (string)$faker->longitude,
        'tanggal_berdiri' => $faker->dateTime,
        'tanggal_tutup' => $faker->dateTime,
        'pemimpin_id' => $faker->randomElement($pemimpin),
    ];
});
