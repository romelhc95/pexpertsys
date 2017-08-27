<?php

use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('solutions')->insert([
            'description'   =>  'Limpieza de la plantación (desenchante tipo cebolla).',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Enfunde prematuro.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Aplicación de azufre al pie de la planta, seudotallo y cogollo hasta el nudo de corbata del raquis.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Buena cobertura de rayos solares (deshoje, deshije).',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Controlar hormiga amiga de la cochinilla, ya que ésta la transporta hasta llegar a los racimos.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'En caso que el racimo cosechado con fumagina, llegue al centro de empaque, las "manias" lavarlas con jugo de limón.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Aplicación de azufre al follaje de la planta.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Realizar cirugia en hojas.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Las hojas infestadas colocarlas en el suelo con el envés hacia arriba para que la plaga reciba los rayos solares.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'La frecuencia de riego que no sea interrumpida: En verano cada 10 a 15 das y en invierno cada 20 a 25 días',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Semillas provenientes de plantacines sanas.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Realizar prácticas como deshije, eliminación de calcetas y destalle a tiempo.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Controlar malezas y residuos de cocecha alrededor de la planta.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'Realizar trampas.',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('solutions')->insert([
            'description'   =>  'No dejar el "7".',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
