<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Menu_RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_role')->insert([
            // role admin
            [
                'role_id' => 1,
                'menu_id' => 1,
                'akses' => 1,
                'tambah' => 1,
                'edit' => 1,
                'hapus' => 1,
            ],
            [
                'role_id' => 1,
                'menu_id' => 2,
                'akses' => 1,
                'tambah' => 1,
                'edit' => 1,
                'hapus' => 1,
            ],
            [
                'role_id' => 1,
                'menu_id' => 3,
                'akses' => 1,
                'tambah' => 1,
                'edit' => 1,
                'hapus' => 1,
            ],
            [
                'role_id' => 1,
                'menu_id' => 4,
                'akses' => 1,
                'tambah' => 1,
                'edit' => 1,
                'hapus' => 1,
            ]
        ]);
    }
}
