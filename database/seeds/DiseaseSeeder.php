<?php

use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            'name'          =>  'Pulgón Negro',
            'name_c'        =>  'Pentalonia nigronervosa',
            'description'   =>  'Las colonias del áfido del banano se encuentran comúnmente en las vainas superiores de la hoja y las brácteas inferiores de la flor del tallo del jengibre. Toda la inflorescencia Las hormigas se asocian con el áfido del plátano. Las hormigas se alimentan de la melaza secretada por el áfido y, a su vez, establecen nuevas colonias de áfidos y evitan enemigos naturales.puede estar infestada. Pequeñas colonias ocurren ocasionalmente en la hoja. Los adultos con alas a menudo se desarrollan después de 7 a 10 generaciones de individuos sin alas. Los adultos alados dispersantes establecen nuevas colonias en otras nuevas plantas huésped. Aunque no son voladores fuertes, pueden ser transportados distancias considerables por vientos ligeros. La actividad de vuelo alcanza entre las 9:00 y las 11:00 am y las 17:00 horas hasta el anochecer.',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('diseases')->insert([
            'name'          =>  'Cochinilla Harinosa',
            'name_c'        =>  'Pseudococcus elisae',
            'description'   =>  'La hembra adulta tiene 16 o 17 pares de finos filamentos cerosos en todo el margen de cuerpo, que son cortos en la cabeza y el largos en el extremo posterior del abdomen. La longitud del cuerpo es de aproximadamente 2,5 mm. La hembra está cubierta con una capa delgada de cera blanca en polvo, pero esto no oculta completamente el color pálido cuerpo de color naranja. El cuerpo del macho es de color marrón rojizo. Un ovisaco ceroso blanco es producido que es más largo o igual a la longitud del cuerpo del adulto, y encierra los huevos. Las cochinillas en general tienen cuatro estadios masculinos y cinco femeninos (incluidos los adultos). El primer estadio suele ser más móviles que el resto. La hembra adulta pone sus huevos en un saco ceroso llamado ovisaco unido a la planta hospedante. Los huevos eclosionan generalmente en pocas horas a unos pocos días y los primeros estadios al escapar del ovisaco se arrastran en el hospedante en busca de un sitio de alimentación adecuado.',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('diseases')->insert([
            'name'          =>  'Arañita Roja',
            'name_c'        =>  'Tetranychus cinnabarinus',
            'description'   =>  'Añarita Roja',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('diseases')->insert([
            'name'          =>  'Picudo Rayado',
            'name_c'        =>  'Metamasius hemipterus',
            'description'   =>  'Picudo Rayado',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('diseases')->insert([
            'name'          =>  'Picudo Negro',
            'name_c'        =>  'Cosmopolitus sordidus',
            'description'   =>  'Picudo Negro',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        DB::table('diseases')->insert([
            'name'          =>  'Raspador de Fruto',
            'name_c'        =>  'Colaspis sp',
            'description'   =>  'Raspador de Fruto',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('diseases')->insert([
            'name'          =>  'Mosca Blanca',
            'name_c'        =>  'Alerodicus dispersus',
            'description'   =>  'Mosca Blanca',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('diseases')->insert([
            'name'          =>  'Escamas',
            'name_c'        =>  'Aspidiotus destructor',
            'description'   =>  'Escamas',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('diseases')->insert([
            'name'          =>  'Trips de la Flor',
            'name_c'        =>  'Frankliniella párvula',
            'description'   =>  'Trips de la Flor',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('diseases')->insert([
            'name'          =>  'Trips de la Mancha Roja',
            'name_c'        =>  'Chaetanaphotrips signipennis',
            'description'   =>  'Trips de la Mancha Roja',
            'type_id'       =>  2,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        DB::table('diseases')->insert([
            'name'          =>  'Erwinia',
            'name_c'        =>  'Erwinia',
            'description'   =>  'Erwinia',
            'type_id'       =>  1,
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
