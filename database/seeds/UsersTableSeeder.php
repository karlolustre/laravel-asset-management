<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'address' => '',
                'admin' => 1,
                'created_at' => '2019-05-24 09:38:57',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2019-05-24 09:38:57',
                'gender' => '',
                'id' => 1,
                'name' => 'admin',
                'password' => '$2y$10$gG20oglJ0skVWTG7.gcizevjf6yP/xVGwQ6xMaayOPyr4zw3oqUN.',
                'phone' => 0,
                'remember_token' => NULL,
                'updated_at' => '2019-05-24 09:38:57',
            ),
        ));
        
        
    }
}