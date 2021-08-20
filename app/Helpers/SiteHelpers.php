<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class SiteHelpers 
{
    public static function cek_akses()
    {
        // return 'izzan';
        $user = DB::table('users')->where('username','mya')->first();
        return $user;
    }

    public static function main_menu()
    {
        $main_menu = DB::table('menu_role')
                    ->join('menus', 'menus.id', '=', 'menu_role.menu_id')
                    ->join('role_user', 'role_user.role_id', '=', 'menu_role.role_id')
                    ->select('menus.*', 'menu_role.akses', 'menu_role.tambah', 'menu_role.edit', 'menu_role.hapus', 'role_user.role_id')
                    ->where('menu_role.role_id', 1)
                    ->where('role_user.role_id', 1)
                    ->where('menus.level_menu', 'main_menu')
                    ->get();
        
        return $main_menu;
    }

    public static function sub_menu()
    {
        $main_menu = DB::table('menu_role')->join('menus', 'menus.id', '=', 'menu_role.menu_id')
                    ->select('menus.*', 'menu_role.akses', 'menu_role.tambah', 'menu_role.edit', 'menu_role.hapus')
                    ->where('menu_role.role_id', 1)
                    ->where('menus.level_menu', 'sub_menu')
                    ->get();
        
        return $main_menu;
    }
}