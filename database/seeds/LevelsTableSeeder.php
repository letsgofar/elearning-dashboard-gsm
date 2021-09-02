<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = collect(['special', 'basic', 'advanced']);
        $levels->each(function ($l) {
            \App\Level::create([
                'name' => $l,
                'slug' => \Str::slug($l),
            ]);
        });
    }
}
