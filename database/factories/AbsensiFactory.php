<?php

use Faker\Generator as Faker;

    $factory->define(\App\Absensi::class, function (Faker $faker) {
    $pegawai = \App\Pegawai::all()->pluck('id')->toArray();
    $branch = \App\Branch::all()->pluck('id')->toArray();
    return [
        'date'=>$faker->dateTimeBetween("-3 years"),
        'jam_masuk'=>$faker->time(),
        'jam_pulang'=>$faker->time(),
        'pegawai_id'=>$faker->randomElement($pegawai),
        'branch_id'=>$faker->randomElement($branch),
        'keterangan'=>$faker->randomElement($array = array("A","H","I","S")),
    ];
});
