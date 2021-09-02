<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Module;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Module::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 4),
        'level_id' => rand(1, 3),
        'grade_id' => rand(1, 3),
        'title' => $faker->sentence(5),
        'slug' => Str::slug($faker->sentence()),
        'description' => $faker->paragraph(20),
        'challenge' => $faker->paragraph(10),
        'url_video' => $faker->sentence(4),
        'url_image' => $faker->sentence(4),
        'url_document' => $faker->sentence(4),
    ];
});
