<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'description'   =>  'Enfermedad'
        ]);

        DB::table('types')->insert([
            'description'   =>  'Plaga'
        ]);
    }
}
