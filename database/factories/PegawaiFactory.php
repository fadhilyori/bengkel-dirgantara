<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Pegawai::class, function (Faker $faker) {
    static $password;
    $branch = \App\Branch::all()->pluck('id')->toArray();
    $role = \App\Role::all()->pluck('id')->toArray();
    $status = \App\Status::all()->pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'alamat' => $faker->address,
        'no_telp' => $faker->phoneNumber,
        'tanggal_masuk' => $faker->dateTime,
        'tanggal_keluar' => null,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => $faker->randomElement($array = array (null, $faker->dateTime)),
        'password' => $password ?: $password = bcrypt('admin'),
        'role_id' => $faker->randomElement($role),
        'manajer_id' => null,
        'branch_id' => $faker->randomElement($branch),
        'status_id' => $faker->randomElement($status),
        'remember_token' => str_random(10),
    ];
});
