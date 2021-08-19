<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'nama_jabatan' => 'Staf IT',
                'gaji_pokok' => 5000000,
                'tunjangan_jabatan' => 300000,
                'tunjangan_makan_perhari' => 25000,
                'tunjangan_transport_perhari' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_jabatan' => 'Staf Finance',
                'gaji_pokok' => 4500000,
                'tunjangan_jabatan' => 250000,
                'tunjangan_makan_perhari' => 20000,
                'tunjangan_transport_perhari' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
