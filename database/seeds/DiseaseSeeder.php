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
        DB::table('diseases')->insert([ //1
            'name'          =>  'Pulgón Negro',
            'name_c'        =>  'Pentalonia nigronervosa',
            'description'   =>  'Las colonias del áfido del banano se encuentran comúnmente en las vainas superiores de la hoja y las brácteas inferiores de la flor del tallo del jengibre. Toda la inflorescencia Las hormigas se asocian con el áfido del plátano. Las hormigas se alimentan de la melaza secretada por el áfido y, a su vez, establecen nuevas colonias de áfidos y evitan enemigos naturales.puede estar infestada. Pequeñas colonias ocurren ocasionalmente en la hoja. Los adultos con alas a menudo se desarrollan después de 7 a 10 generaciones de individuos sin alas. Los adultos alados dispersantes establecen nuevas colonias en otras nuevas plantas huésped. Aunque no son voladores fuertes, pueden ser transportados distancias considerables por vientos ligeros. La actividad de vuelo alcanza entre las 9:00 y las 11:00 am y las 17:00 horas hasta el anochecer.',
            'type_id'       =>  2,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('diseases')->insert([ //2
            'name'          =>  'Cochinilla Harinosa',
            'name_c'        =>  'Pseudococcus elisae',
            'description'   =>  'La hembra adulta tiene 16 o 17 pares de finos filamentos cerosos en todo el margen de cuerpo, que son cortos en la cabeza y el largos en el extremo posterior del abdomen. La longitud del cuerpo es de aproximadamente 2,5 mm. La hembra está cubierta con una capa delgada de cera blanca en polvo, pero esto no oculta completamente el color pálido cuerpo de color naranja. El cuerpo del macho es de color marrón rojizo. Un ovisaco ceroso blanco es producido que es más largo o igual a la longitud del cuerpo del adulto, y encierra los huevos. Las cochinillas en general tienen cuatro estadios masculinos y cinco femeninos (incluidos los adultos). El primer estadio suele ser más móviles que el resto. La hembra adulta pone sus huevos en un saco ceroso llamado ovisaco unido a la planta hospedante. Los huevos eclosionan generalmente en pocas horas a unos pocos días y los primeros estadios al escapar del ovisaco se arrastran en el hospedante en busca de un sitio de alimentación adecuado.',
            'type_id'       =>  2,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('diseases')->insert([ //3
            'name'          =>  'Arañita Roja',
            'name_c'        =>  'Tetranychus cinnabarinus',
            'description'   =>  'Con su aparato bucal raspador y chupador las larvas, ninfas y adultos se alimentan del jugo celular. Las colonias se localizan con bastante frecuencia cerca del nervio central y en el envés de las hojas, provocando manchas de color blanquecino que se extienden por toda la hoja. A medida que se intensifica el ataque se tornan amarillas hasta que se secan y toman aspecto de quemadas. En las plantaciones muy jóvenes pueden causar defoliación y hasta la muerte de las plantas cuando los daños son severos. Este ácaro ataca a las plantas de todas las edades pero fundamentalmente a las de fomento. Se caracteriza por producir telarañas en las zonas donde actúa.',
            'type_id'       =>  2,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('diseases')->insert([ //4
            'name'          =>  'Picudo Rayado',
            'name_c'        =>  'Metamasius hemipterus',
            'description'   =>  'La intensidad del daño es mayor en plamtaciones que no reciben mantenimiento creandose condiciones prpicias para la multiplicacion del insecto, el cual se adapta bien en ambientes humedos y oscuros. Debido al ambito nocturno de los adultos, pueden pasar desapercibidos hasta cuando los daños ocacionados en las plantas sean evidentes y economicamente significativos. Las larvas son los causantes del daño y no los adultos, pues estos se alimentan de calcetas y seudotallos en descomposición. Las larvas se alimentan y desarrollan dentro del rizoma o cepa formando galerias que obstruyen el paso del agua.',
            'type_id'       =>  2,
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('diseases')->insert([ //5
            'name'          =>  'Picudo Negro',
            'name_c'        =>  'Cosmopolitus sordidus',
            'description'   =>  'La intensidad del daño es mayor en plamtaciones que no reciben mantenimiento creandose condiciones prpicias para la multiplicacion del insecto, el cual se adapta bien en ambientes humedos y oscuros. Debido al ambito nocturno de los adultos, pueden pasar desapercibidos hasta cuando los daños ocacionados en las plantas sean evidentes y economicamente significativos. Las larvas son los causantes del daño y no los adultos, pues estos se alimentan de calcetas y seudotallos en descomposición. Las larvas se alimentan y desarrollan dentro del rizoma o cepa formando galerias que obstruyen el paso del agua.',
            'type_id'       =>  2,
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('diseases')->insert([ //6
            'name'          =>  'Raspador de Fruto',
            'name_c'        =>  'Colaspis sp',
            'description'   =>  'Se le considera como la principal plaga del fruto en las zonas de exportación de plátano y banano, puesto que al alimentarse de los frutos producen daños que afectan considerablemente su presentación y por ende la cantidad de fruta exportable. Su control incrementa ostensiblemente los costos de producción, en plantaciones de banano y plátano.',
            'type_id'       =>  2,
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);
        DB::table('diseases')->insert([ //7
            'name'          =>  'Mosca Blanca',
            'name_c'        =>  'Alerodicus dispersus',
            'description'   =>  'Las moscas blancas poseen un aparato bucal tipo picador - succionador de la savia de la planta. Su sistema digestivo elimina azucares, llamados mielecillas, que posibilitan el crecimiento de hongos causantes de la fumagina.',
            'type_id'       =>  2,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('diseases')->insert([ //8
            'name'          =>  'Escamas',
            'name_c'        =>  'Diaspis boisduvallii y Aspidiotus destructor',
            'description'   =>  'Las hembras son pequeñas, con cuerpos blandos y están cubiertas por una escama de cera; son ovíparas o seudovivíparas; los huevos están protegidos debajo de la escama . Cuando las poblaciones de estos insectos aumentan, se pueden encontrar en la corona, el pinzote y en los dedos, provocando en este último caso, una pequeña lesión de forma cóncava y clorótica.',
            'type_id'       =>  2,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('diseases')->insert([ //9
            'name'          =>  'Trips de la Flor',
            'name_c'        =>  'Frankliniella párvula',
            'description'   =>  'La hembra inicia la postura de los huevos sobre la cáscara de las frutas tiernas. Al eclosionar éstos, forman unos puntos oscuros y rugosos que se sienten al tacto. La fruta muy afectada se descarta, aunque no dañe más allá de su cáscara.',
            'type_id'       =>  2,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('diseases')->insert([ //10
            'name'          =>  'Trips de la Mancha Roja',
            'name_c'        =>  'Chaetanaphotrips signipennis',
            'description'   =>  'Los trips tienen un aparato bucal raspador – lamedor y forman grandes colonias. Los adultos alados y las ninfas se localizan entre los dedos de la fruta poco después de que los pétalos de las flores se secan. Al alimentarse insertan su estilete y causan un exudado de la savia que rápidamente se oxida y se torna de color café rojizo. El daño es una mancha rojiza en la epidermis de la cáscara del fruto, que en principio es ovalada y se presenta en las áreas donde se tocan dos frutos, extendiéndose, luego, sobre toda la superficie. La cáscara se vuelve áspera y sin brillo. Inicialmente, el daño es más evidente en las primeras dos manos, y casi siempre, en el punto de contacto de los dedos, el daño se manifiesta más o menos a las dos semanas de la salida de la inflorescencia.',
            'type_id'       =>  2,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('diseases')->insert([ //11
            'name'          =>  'Erwinia',
            'name_c'        =>  'Erwinia',
            'description'   =>  'La pudrición avanza progresivamente hacia la base del seudotallo y al mismo tiempo, penetra en los tejidos de las vainas sanas internas por contacto con las externas afectadas. A medida que las vainas internas son invalidas se produce un debilitamiento del seudotallo, esto ocasiona el doblamiento de la planta por la parte mas afectada. Si las plantas son afectadas en estado adulto, el peso de los racimos contribuye a un volcamiento de las mismas, antes que los frutos completen su normal desarrollo, produciendo racimos de poco valor comercial.',
            'type_id'       =>  1,
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('diseases')->insert([ //12
            'name'          =>  'Nematodo Barredor',
            'name_c'        =>  'Radopholus similis',
            'description'   =>  'Para saber si en el cultivo hay presencia de nematodo, solo hay un metodo seguro a través del analisis de muestras de raiz y suelo en el laboratorio. La importancia económica radica en la perdida del sistema de raices, que es la parte fundamental para la nutrición de la planta, el anclaje de la planta y disminución de los rendimientos.',
            'type_id'       =>  2,
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);
    }
}
