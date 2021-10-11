<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Raportuser;
use Faker\Generator as Faker;

$factory->define(Raportuser::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'slug' => Str::slug($faker->sentence()),
        'jenis_modul' => $faker->sentence(),
        'nama_modul' => $faker->sentence(),
        'nilai_modul' => rand(70, 100),
    ];
});
