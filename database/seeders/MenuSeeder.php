<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'nama_menu' => 'Dashboard',
                'nomor_urut' => 1,
            ],
            [
                'nama_menu' => 'Setup Aplikasi',
                'nomor_urut' => 2,
            ],
            [
                'nama_menu' => 'Divisi',
                'nomor_urut' => 3,
            ],
            [
                'nama_menu' => 'Karyawan',
                'nomor_urut' => 4,
            ]
        ]);
    }
}
