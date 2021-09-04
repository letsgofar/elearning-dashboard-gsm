<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = collect(['negeri', 'swasta']);
        $statuses->each(function ($stat) {
            \App\Status::create([
                'name' => $stat,
                'slug' => \Str::slug($stat),
            ]);
        });
    }
}
