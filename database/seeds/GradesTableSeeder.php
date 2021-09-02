<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = collect(['SD', 'SMP', 'SMA']);
        $grades->each(function ($g) {
            \App\Grade::create([
                'name' => $g,
                'slug' => \Str::slug($g),
            ]);
        });
    }
}
