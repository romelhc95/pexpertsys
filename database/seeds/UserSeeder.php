<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('admin'),
            'name'      =>  'Administrador',
            'lastname'  =>  null,
            'gender'    =>  1,
            'birthday'  =>  '1991-01-11',
            'phone'     =>  null,
            'mobil'     =>  null,
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'email'     =>  'agricultor@agricultor.com',
            'password'  =>  bcrypt('agricultor'),
            'name'      =>  'Agricultor',
            'lastname'  =>  null,
            'gender'    =>  1,
            'birthday'  =>  '1991-01-11',
            'phone'     =>  null,
            'mobil'     =>  null,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
