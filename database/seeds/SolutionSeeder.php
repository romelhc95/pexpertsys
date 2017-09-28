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

        DB::table('solutions')->insert([ //1
            'description'   =>  'Limpieza de la plantación (desenchante tipo cebolla).',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //2
            'description'   =>  'Enfunde prematuro.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //3
            'description'   =>  'Aplicación de azufre al pie de la planta, seudotallo y cogollo hasta el nudo de corbata del raquis.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //4
            'description'   =>  'Buena cobertura de rayos solares (deshoje, deshije).',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //5
            'description'   =>  'En caso que el racimo cosechado con fumagina, llegue al centro de empaque, las "manias" lavarlas con jugo de limón.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //6
            'description'   =>  'Controlar hormiga amiga de la cochinilla, ya que ésta la transporta hasta llegar a los racimos.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //7
            'description'   =>  'Aplicación de azufre al follaje de la planta.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //8
            'description'   =>  'Realizar cirugia en hojas.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //9
            'description'   =>  'Las hojas infestadas colocarlas en el suelo con el envés hacia arriba para que la plaga reciba los rayos solares.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //10
            'description'   =>  'La frecuencia de riego que no sea interrumpida: En verano cada 10 a 15 das y en invierno cada 20 a 25 días',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //11
            'description'   =>  'Semillas provenientes de plantacines sanas.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //12
            'description'   =>  'Realizar prácticas como deshije, eliminación de calcetas y destalle a tiempo.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //13
            'description'   =>  'Controlar malezas y residuos de cocecha alrededor de la planta.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //14
            'description'   =>  'Realizar trampas.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //15
            'description'   =>  'No dejar el "7".',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //16
            'description'   =>  'Trampa etologica.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //17
            'description'   =>  'Caldo sulfocalcio.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //18
            'description'   =>  'Repelente biologico.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //19
            'description'   =>  'Tener suelos bien drenados.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //20
            'description'   =>  'Adquirir material de viveros bien registrados.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //21
            'description'   =>  'Utilizar acondicionadores de suelos que cumplan con los respectivos registros.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //22
            'description'   =>  'Realizar un plan de fertilización basado en el analisis de suelo.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //23
            'description'   =>  'Realizar una deinfectación del pseudotallo con el adecuado agente desinfectante.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //24
            'description'   =>  'Realizar planteos amplios.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //25
            'description'   =>  'Descolinar y eliminar residuos de cosecha, especialmente cormos y raices afectadas, mediante repique.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('solutions')->insert([ //26
            'description'   =>  'Desinfectar las herramientas y elementos agricolas.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
    }
}
