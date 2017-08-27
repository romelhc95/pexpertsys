<?php

use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
            'number'        =>  1,
            'disease_id'    =>  10,
            'symptom_id'    =>  1,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  1,
            'disease_id'    =>  10,
            'symptom_id'    =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  1,
            'disease_id'    =>  10,
            'symptom_id'    =>  3,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  2,
            'disease_id'    =>  11,
            'symptom_id'    =>  4,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  2,
            'disease_id'    =>  11,
            'symptom_id'    =>  5,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  2,
            'disease_id'    =>  11,
            'symptom_id'    =>  6,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  2,
            'disease_id'    =>  11,
            'symptom_id'    =>  7,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  2,
            'disease_id'    =>  11,
            'symptom_id'    =>  8,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  2,
            'disease_id'    =>  11,
            'symptom_id'    =>  9,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  3,
            'disease_id'    =>  3,
            'symptom_id'    =>  10,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  3,
            'disease_id'    =>  3,
            'symptom_id'    =>  11,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('rules')->insert([
            'number'        =>  3,
            'disease_id'    =>  3,
            'symptom_id'    =>  12,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
