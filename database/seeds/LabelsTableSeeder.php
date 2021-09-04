<?php

use Illuminate\Database\Seeder;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = collect(['model', 'emodel', 'jejaring', 'indonesia']);
        $labels->each(function ($lab) {
            \App\Label::create([
                'name' => $lab,
                'slug' => \Str::slug($lab),
            ]);
        });
    }
}
