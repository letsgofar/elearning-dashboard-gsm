<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'admingsm',
            'slug' => 'admingsm',
            'role_id' => 1,
            'email' => 'admin@gsm.id',
            'password' => bcrypt('password')
        ]);
    }
}
