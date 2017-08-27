<?php

use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('steps')->insert([
            'number'    =>  1
        ]);
        DB::table('steps')->insert([
            'number'    =>  2
        ]);
        DB::table('steps')->insert([
            'number'    =>  3
        ]);
        DB::table('steps')->insert([
            'number'    =>  4
        ]);
        DB::table('steps')->insert([
            'number'    =>  5
        ]);
        DB::table('steps')->insert([
            'number'    =>  6
        ]);
        DB::table('steps')->insert([
            'number'    =>  7
        ]);
        DB::table('steps')->insert([
            'number'    =>  8
        ]);
        DB::table('steps')->insert([
            'number'    =>  9
        ]);
        DB::table('steps')->insert([
            'number'    =>  10
        ]);
    }
}
