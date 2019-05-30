<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'email_verified_at' => now(),
        	'password' => bcrypt('password'),
        	'admin' => 1,
        ]);
    }
}
