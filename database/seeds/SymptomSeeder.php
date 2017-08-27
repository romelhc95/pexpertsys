<?php

use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
            'name'          =>  'Manchas color rojizas en el pseudotallo.',
            'description'   =>  'Manchas color rojizas en el pseudotallo.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('symptoms')->insert([
            'name'          =>  'Daño al dedo de la rasima.',
            'description'   =>  'Daño al dedo de la rasima.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'Atrazo de crecimiento de los hijuelos.',
            'description'   =>  'Atrazo de crecimiento de los hijuelos.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'Pudrición blanda en axilas de hojas.',
            'description'   =>  'Pudrición blanda en axilas de hojas.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'Mal olor en la ampolladura de los pseudotallos.',
            'description'   =>  'Mal olor en la ampolladura de los pseudotallos.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'Pudrición en el pseudotallo.',
            'description'   =>  'Pudrición en el pseudotallo.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'Color oscuro en el pseudotallo.',
            'description'   =>  'Color oscuro en el pseudotallo.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'Color amarillento en las hojas.',
            'description'   =>  'Color amarillento en las hojas.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('symptoms')->insert([
            'name'          =>  'Se debilita el pseudotallo.',
            'description'   =>  'Se debilita el pseudotallo.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('symptoms')->insert([
            'name'          =>  'Hojas cloristicas.',
            'description'   =>  'Hojas cloristicas.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'Hojas secas.',
            'description'   =>  'Hojas secas.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('symptoms')->insert([
            'name'          =>  'No hay buen desarrollo en la planta.',
            'description'   =>  'No hay buen desarrollo en la planta (No completa correctamente la fotosintesis).',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
