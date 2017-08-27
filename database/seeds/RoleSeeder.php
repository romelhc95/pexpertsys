<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'          =>  'admin',
            'display_name'  =>  'Administrador',
            'description'   =>  'Usuario con todos los permisos del sistema.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('roles')->insert([
            'name'          =>  'agricultor',
            'display_name'  =>  'Agricultor',
            'description'   =>  'Agricultor del sistema.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
