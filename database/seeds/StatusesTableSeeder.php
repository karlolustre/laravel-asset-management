<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'created_at' => '2019-05-27 04:23:36',
                'id' => 1,
                'name' => 'pending',
                'updated_at' => '2019-05-27 04:23:36',
            ),
            1 => 
            array (
                'created_at' => '2019-05-27 04:26:20',
                'id' => 2,
                'name' => 'completed',
                'updated_at' => '2019-05-27 04:26:20',
            ),
            2 => 
            array (
                'created_at' => '2019-05-27 04:26:51',
                'id' => 3,
                'name' => 'cancelled',
                'updated_at' => '2019-05-27 04:26:51',
            ),
        ));
        
        
    }
}