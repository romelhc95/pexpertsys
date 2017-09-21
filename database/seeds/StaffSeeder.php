<?php

use Illuminate\Database\Seeder;
use Tesis\Models\Role;
use Tesis\Models\User;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos primero rol administrador y de usuario
        $rolAdmin               = new Role;
        $rolAdmin->name         = 'admin';
        $rolAdmin->display_name = 'Administrador';
        $rolAdmin->description  = 'Usuario con todos los permisos del sistema';
        $rolAdmin->save();

        $rolAgricultor               = new Role;
        $rolAgricultor->name         = 'agricultor';
        $rolAgricultor->display_name = 'Agricultor';
        $rolAgricultor->description  = 'Agricultor del Sistema';
        $rolAgricultor->save();

        // creamos el usuario administrador y un usuario de ejemplo
        $admin           = new User;
        $admin->email    = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->name     = 'Administrador';
        $admin->gender   = 1;
        $admin->birthday = '11/01/1991';
//        $admin->state_id = 1;
        $admin->save();
        $admin->attachRole($rolAdmin);

        $agricultor           = new User;
        $agricultor->email    = 'agricultor@agricultor.com';
        $agricultor->password = bcrypt('agricultor');
        $agricultor->name     = 'Agricultor';
        $agricultor->lastname = 'de Prueba';
        $agricultor->gender   = 1;
        $agricultor->birthday = '11/01/1991';
//        $agricultor->state_id = 1;
        $agricultor->save();
        $agricultor->attachRole($rolAgricultor);
    }
}
