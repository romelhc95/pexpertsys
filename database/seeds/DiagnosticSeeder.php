<?php

use Illuminate\Database\Seeder;
use Tesis\Models\Diagnostic;

class DiagnosticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const FAKES_DIAGNOSTIC = 500;
//    const FAKES_DIAGNOSTIC = 62;
    public function run()
    {
        factory(Diagnostic::class, self::FAKES_DIAGNOSTIC)->create();
    }
}
