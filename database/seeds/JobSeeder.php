<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job')->insert([
            'nama' => "Ganti Oli",
            'deskripsi' => "Mengganti oli mesin sepeda motor",
        ]);
        DB::table('job')->insert([
            'nama' => "Ganti Ban Dalam",
            'deskripsi' => "Mengganti ban dalam sepeda motor",
        ]);
        DB::table('job')->insert([
            'nama' => "Ganti Ban Luar",
            'deskripsi' => "Mengganti ban luar motor",
        ]);
        DB::table('job')->insert([
            'nama' => "Mengganti Lampu Depan/Belakang",
            'deskripsi' => "Mengganti lampu depan/belakang sepeda motor",
        ]);
        DB::table('job')->insert([
            'nama' => "Service Rutin",
            'deskripsi' => "Service rutin sepeda motor",
        ]);
    }
}
