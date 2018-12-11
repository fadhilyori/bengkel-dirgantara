<?php

use Illuminate\Database\Seeder;

class ModelKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ModelKendaraan::class, 50)->create();
    }
}
