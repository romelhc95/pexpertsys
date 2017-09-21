<?php

$factory->define(Tesis\Models\Diagnostic::class, function ($faker) {
//    $fakeDate = $faker->dateTimeThisYear();
//    $fakeDate = $faker->dateTimeBetween($startDate = '2017-04-13 00:00:00', $endDate = 'now', $timezone = date_default_timezone_get());
    $fakeDate = $faker->dateTimeBetween($startDate = '2017-09-15 00:00:00', $endDate = 'now', $timezone = date_default_timezone_get());
    return [
        'user_id'    => $faker->numberBetween(3, 200),
//        'user_id'    => 2,
        'disease_id' => $faker->numberBetween(1, 12),
        'created_at' => $fakeDate,
        'updated_at' => $fakeDate,
    ];
});

$factory->define(Tesis\Models\User::class, function ($faker) {
    return [
        'name'     => $faker->firstName,
        'lastname' => $faker->lastName,
        'email'    => $faker->unique()->email,
        'birthday' => $faker->date($format = 'd/m/Y', $max = 'now'),
        'phone'    => $faker->unique()->randomNumber(6),
        'mobil'    => $faker->unique()->randomNumber(9),
        'gender'   => $faker->numberBetween(0, 1),
        'password' => bcrypt('pruebasistema'),
        // por cada departamento al azar
//        'state_id' => $faker->numberBetween(1, 24),
    ];
});

$factory->define(Tesis\Models\Symptom::class, function ($faker) {
    return [
        'name'        => $faker->unique()->word,
        'description' => $faker->sentence,
    ];
});

$factory->define(Tesis\Models\Disease::class, function ($faker) {
    $nombre   = $faker->unique()->word;
    $nombre_c = "{$nombre} {$faker->word}";
    return [
        'name'        => $nombre,
        'name_c'      => $nombre_c,
        'description' => $faker->sentence,
    ];
});
