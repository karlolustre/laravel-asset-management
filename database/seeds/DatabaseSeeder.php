<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        // $this->call(UsersSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RentalsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(ItemRentalTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
    }
}
