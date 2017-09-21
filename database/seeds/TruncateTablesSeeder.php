<?php

use Illuminate\Database\Seeder;

class TruncateTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //    /**
//     * Set foreign key hace que se active y desactive las
//     * claves foraneas para poder limpiar la base de
//     * datos sin que aparezca ningun tipo de errores
//     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('diagnostics')->truncate();
        DB::table('diseases')->truncate();
        DB::table('password_resets')->truncate();
        DB::table('permission_role')->truncate();
        DB::table('permissions')->truncate();
        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();
        DB::table('rules')->truncate();
        DB::table('symptoms')->truncate();
        DB::table('solutions')->truncate();
        DB::table('users')->truncate();
        DB::table('plants')->truncate();
        DB::table('types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
