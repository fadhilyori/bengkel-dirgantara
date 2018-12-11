<?php

use Faker\Generator as Faker;

$factory->define(\App\Part::class, function (Faker $faker) {
    return [
        'nama' => $faker->randomElement(array('Oli','Spooring','Accu','Velg','Tangki','Knalpot','Kapiler','Spion','Suspensi','Lampu','Ban','Box')) . ' ' . $faker->randomLetter,
        'deskripsi' => null,
        'qty' => $faker->randomNumber(2),
        'price' => $faker->randomNumber(4),
    ];
});
