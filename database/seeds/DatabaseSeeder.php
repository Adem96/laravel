<?php

use App\User;
use App\Product;
use App\Categorie;
use App\UserProduct;
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
        // $this->call(UserSeeder::class);
        User::factory(15)->create();
        Categorie::factory(10)->create();
        Product::factory(200)->create();
        UserProduct::factory(50)->create();
    }
}
