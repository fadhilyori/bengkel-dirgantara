<?php

use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'nama'=> $faker->name,
        'alamat'=> $faker->address,
        'no_telp'=> $faker->phoneNumber,
        'npwp'=> $faker->buildingNumber,
        'email'=> $faker->unique()->safeEmail,
    ];
});
