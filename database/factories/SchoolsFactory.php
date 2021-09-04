<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'grade_id' => rand(1, 3),
        'status_id' => rand(1, 2),
        'label_id' => rand(1, 4),
        'npsn' => rand(10000000, 90000000),
        'nama' => $faker->sentence(2),
        'slug' => Str::slug($faker->sentence()),
        'alamat' => $faker->paragraph(3),
        'kecamatan' => $faker->paragraph(3),
        'kabupaten' => $faker->paragraph(3),
        'provinsi' => $faker->paragraph(3),
    ];
});
