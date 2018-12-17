<?php

    use Faker\Generator as Faker;

    $factory->define(\App\Kendaraan::class, function (Faker $faker) {
    $warna = \App\Warna::all()->pluck('id')->toArray();
    $type = \App\TypeKendaraan::all()->pluck('id')->toArray();
    $model = \App\ModelKendaraan::all()->pluck('id')->toArray();
    $customer = \App\Customer::all()->pluck('id')->toArray();
    return [
        'nama'=>$faker->randomElement(array('Toyota','Daihatsu','Honda','Isuzu','Wuling','Datsun','Nissan','Hino','Suzuki','Nissan')),
        'tahun_keluar'=>$faker->company,
        'license'=>$faker->randomLetter . ' ' . $faker->randomNumber(4) . ' ' . $faker->randomLetter,
        'warna_id'=>$faker->randomElement($warna),
        'type_kendaraan_id'=>$faker->randomElement($type),
        'model_kendaraan_id'=>$faker->randomElement($model),
        'customer_id'=>$faker->randomElement($customer),
    ];
});
