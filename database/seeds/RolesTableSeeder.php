<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = collect(['admin', 'mentor', 'guru']);
        $roles->each(function ($r) {
            \App\Role::create([
                'name' => $r,
                'slug' => \Str::slug($r),
            ]);
        });
    }
}
