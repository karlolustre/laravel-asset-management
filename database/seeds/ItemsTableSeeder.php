<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'category_id' => 2,
                'created_at' => '2019-05-25 14:14:17',
                'description' => 'Stylish design KickScooter Foldable Electric Scooter',
                'id' => 5,
                'image_url' => 'images/1559168282.jpg',
                'name' => 'Segway Ninebot ES2',
                'price' => '230.00',
                'quantity' => 10,
                'updated_at' => '2019-05-29 22:18:51',
            ),
            1 => 
            array (
                'category_id' => 1,
                'created_at' => '2019-05-26 02:08:08',
                'description' => 'Electric scooter with chair and elegant design with heated seat',
                'id' => 7,
                'image_url' => 'images/1559168516.jpg',
                'name' => 'Power Gadget  gt789',
                'price' => '250.00',
                'quantity' => 8,
                'updated_at' => '2019-05-30 03:49:35',
            ),
            2 => 
            array (
                'category_id' => 3,
                'created_at' => '2019-05-28 22:51:58',
                'description' => 'The most expensive electric scooter in the market. High speed with super high quality gears. Built with Wakanda titanium',
                'id' => 8,
                'image_url' => 'images/1559169015.png',
                'name' => 'Scooter Submariner 3000',
                'price' => '499.00',
                'quantity' => 5,
                'updated_at' => '2019-05-29 22:30:15',
            ),
            3 => 
            array (
                'category_id' => 1,
                'created_at' => '2019-05-29 07:51:55',
                'description' => 'Hip scooter for all ages. Light as feather, cool as air, totally fit for any rider',
                'id' => 9,
                'image_url' => 'images/1559168729.jpg',
                'name' => 'Scootz Aerodynamic 2000',
                'price' => '299.00',
                'quantity' => 10,
                'updated_at' => '2019-05-29 22:25:29',
            ),
        ));
        
        
    }
}