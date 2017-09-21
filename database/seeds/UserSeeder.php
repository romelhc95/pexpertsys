<?php

use Illuminate\Database\Seeder;
use Tesis\Models\Role;
use Tesis\Models\User;

class UserSeeder extends Seeder
{
    const FAKES_USERS = 200;
    const USER_ROLE   = 2;
    /**
     * bcrypt = funcion para encriptar contraseñas, equivalente a Hash::make
     */
    public function run()
    {
        $rolAgricultor = Role::findOrFail(self::USER_ROLE);

        for ($i = 0; $i < self::FAKES_USERS; $i++) {
            $user = factory(User::class)->create();
            $user->attachRole($rolAgricultor);
        }
    }
}