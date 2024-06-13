<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\User::create([
            'name'	=> 'admin',
            'username'	=> 'admin',
            'email'	=> 'admin@ugm.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password'	=> bcrypt('admin'),
            'roles'	=> 'ADMIN'
        ]);
    }
}
