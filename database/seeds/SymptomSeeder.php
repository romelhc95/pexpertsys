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
        //Pulgón Negro Id=>1
        DB::table('symptoms')->insert([ //1
            'name'          =>  'Apariencia roseta.',
            'description'   =>  'Apariencia roseta.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //2
            'name'          =>  'Hojas angostas, verticales y progresivamente mas cortas.',
            'description'   =>  'Hojas angostas, verticales y progresivamente mas cortas (cogollo racimoso).',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //3
            'name'          =>  'Hojas enrolladas hacia arriba y muestran un amarillamiento marginal.',
            'description'   =>  'Hojas enrolladas hacia arriba y muestran un amarillamiento marginal.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //4
            'name'          =>  'Muestran rayas de color verde oscuro en la nervadura central y en el peciolo, las cuales extienden hacia abajo hasta el seudotallo.',
            'description'   =>  'Muestran rayas de color verde oscuro en la nervadura central y en el peciolo, las cuales extienden hacia abajo hasta el seudotallo.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //5
            'name'          =>  'Puntos pequeños de color verde oscuro y rayas a lo largo de las venas mas pequeñas de la hoja, las cuales forman como ganchos a medida que llegan al borde de la nervadura central.',
            'description'   =>  'Puntos pequeños de color verde oscuro y rayas a lo largo de las venas mas pequeñas de la hoja, las cuales forman como ganchos a medida que llegan al borde de la nervadura central.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //6
            'name'          =>  'Puntos pequeños de color verde oscuro y rayas a lo largo de las venas mas pequeñas de la hoja, las cuales forman como ganchos a medida que llegan al borde de la nervadura central.',
            'description'   =>  'Puntos pequeños de color verde oscuro y rayas a lo largo de las venas mas pequeñas de la hoja, las cuales forman como ganchos a medida que llegan al borde de la nervadura central.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        // Arañita Roja Id => 3
        DB::table('symptoms')->insert([ //7
            'name'          =>  'Hojas cloristicas.',
            'description'   =>  'Hojas cloristicas.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //8
            'name'          =>  'Hojas secas.',
            'description'   =>  'Hojas secas.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //9
            'name'          =>  'No hay buen desarrollo en la planta.',
            'description'   =>  'No hay buen desarrollo en la planta (No completa correctamente la fotosintesis).',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        //Picudo Rayado Id => 4 y Negro Id => 5
        DB::table('symptoms')->insert([ //10
            'name'          =>  'Perforaciones en el cormo.',
            'description'   =>  'Perforaciones en el cormo.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //11
            'name'          =>  'Debilidad general en la planta.',
            'description'   =>  'Debilidad general en la planta.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //12
            'name'          =>  'Amarillamiento en el cormo.',
            'description'   =>  'Amarillamiento en el cormo.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //13
            'name'          =>  'Reducción en el crecimiento de la planta.',
            'description'   =>  'Reducción en el crecimiento de la planta.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //14
            'name'          =>  'Brote de tallos delgados.',
            'description'   =>  'Brote de tallos delgados.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //15
            'name'          =>  'Poca emisión de colinos.',
            'description'   =>  'Poca emisión de colinos.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        // Trips de la Mancha Roja Id => 10
        DB::table('symptoms')->insert([ //16
            'name'          =>  'Manchas color rojizas en el pseudotallo.',
            'description'   =>  'Manchas color rojizas en el pseudotallo.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //17
            'name'          =>  'Daño al dedo de la racima.',
            'description'   =>  'Daño al dedo de la racima.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('symptoms')->insert([ //18
            'name'          =>  'Atraso de crecimiento de los hijuelos.',
            'description'   =>  'Atraso de crecimiento de los hijuelos.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);

        //Erwinia Id => 11
        DB::table('symptoms')->insert([ //19
            'name'          =>  'Pudrición blanda en axilas de hojas.',
            'description'   =>  'Pudrición blanda en axilas de hojas.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('symptoms')->insert([ //20
            'name'          =>  'Mal olor en la ampolladura de los pseudotallos.',
            'description'   =>  'Mal olor en la ampolladura de los pseudotallos.',
            'created_at'    => date("2017-06-13 00:01:20")
        ]);
        DB::table('symptoms')->insert([ //21
            'name'          =>  'Pudrición en el pseudotallo.',
            'description'   =>  'Pudrición en el pseudotallo.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);
        DB::table('symptoms')->insert([ //22
            'name'          =>  'Color oscuro en el pseudotallo.',
            'description'   =>  'Color oscuro en el pseudotallo.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);
        DB::table('symptoms')->insert([ //23
            'name'          =>  'Color amarillento en las hojas.',
            'description'   =>  'Color amarillento en las hojas.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //24
            'name'          =>  'Se debilita el pseudotallo.',
            'description'   =>  'Se debilita el pseudotallo.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        //Nematodo barredor Id => 12
        DB::table('symptoms')->insert([ //25
            'name'          =>  'Amarillento general en la planta (Clorosis)',
            'description'   =>  'Amarillento general en la planta (Clorosis)',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //26
            'name'          =>  'Reducción de su crecimiento.',
            'description'   =>  'Reducción de su crecimiento.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);

        DB::table('symptoms')->insert([ //27
            'name'          =>  'Mala calidad del racimo y desraizamiento.',
            'description'   =>  'Mala calidad del racimo y desraizamiento.',
            'created_at'    =>  date("2017-06-13 00:01:20")
        ]);
    }
}
