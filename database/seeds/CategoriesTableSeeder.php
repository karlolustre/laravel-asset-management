<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => '2019-05-24 13:49:59',
                'id' => 1,
                'name' => 'premium',
                'updated_at' => '2019-05-24 13:50:20',
            ),
            1 => 
            array (
                'created_at' => '2019-05-24 13:51:06',
                'id' => 2,
                'name' => 'economy',
                'updated_at' => '2019-05-24 13:51:06',
            ),
            2 => 
            array (
                'created_at' => '2019-05-24 13:51:39',
                'id' => 3,
                'name' => 'business',
                'updated_at' => '2019-05-24 13:51:39',
            ),
        ));
        
        
    }
}