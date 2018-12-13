<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PegawaiSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(AbsensiSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(KendaraanSeeder::class);
        $this->call(PartSeeder::class);
    }
}
