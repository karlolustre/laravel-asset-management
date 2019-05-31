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
            1 => 
            array (
                'address' => NULL,
                'admin' => 0,
                'created_at' => '2019-05-27 17:11:33',
                'email' => 'karlomaster@master.com',
                'email_verified_at' => NULL,
                'gender' => NULL,
                'id' => 2,
                'name' => 'karlomaster',
                'password' => '$2y$10$TjTPnkYCcpkgldQOB/b8QOEZbgRUOytrXNFiYhwxstuXEzhyX.Wxe',
                'phone' => NULL,
                'remember_token' => NULL,
                'updated_at' => '2019-05-27 17:11:33',
            ),
            2 => 
            array (
                'address' => NULL,
                'admin' => 0,
                'created_at' => '2019-05-27 22:40:44',
                'email' => 'trial@trial.com',
                'email_verified_at' => NULL,
                'gender' => NULL,
                'id' => 3,
                'name' => 'karlotrial',
                'password' => '$2y$10$tQ4.HP0Cn7iVxdMefU5n9udhcvdGHiId3H3e03eGm.gtT4w6IG1K6',
                'phone' => NULL,
                'remember_token' => NULL,
                'updated_at' => '2019-05-27 22:40:44',
            ),
            3 => 
            array (
                'address' => NULL,
                'admin' => 0,
                'created_at' => '2019-05-28 04:27:32',
                'email' => 'trial2@trial2.com',
                'email_verified_at' => NULL,
                'gender' => NULL,
                'id' => 4,
                'name' => 'trial2',
                'password' => '$2y$10$RWtzusOIR4CvvdSpoy1iRuwx4VVgkdPZSC3Jyo1zN/IfywrbcvXX2',
                'phone' => NULL,
                'remember_token' => NULL,
                'updated_at' => '2019-05-28 04:27:32',
            ),
            4 => 
            array (
                'address' => NULL,
                'admin' => 0,
                'created_at' => '2019-05-29 23:02:12',
                'email' => 'trial3@trial3.com',
                'email_verified_at' => NULL,
                'gender' => NULL,
                'id' => 11,
                'name' => 'trial3',
                'password' => '$2y$10$mHeJhRblvurL65tAzi8guumOudO.eWKDmcawLKd1Eq0BPbGwkQuo2',
                'phone' => NULL,
                'remember_token' => NULL,
                'updated_at' => '2019-05-29 23:02:12',
            ),
        ));
        
        
    }
}