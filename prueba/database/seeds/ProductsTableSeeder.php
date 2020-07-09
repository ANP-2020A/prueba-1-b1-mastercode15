<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Product::truncate();
        $faker = \Faker\Factory::create();

        // Crear productos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->name,
                'code' => $faker->postcode,
                'price' => $faker->numberBetween(10,200),
                'status' => 'active',
            ]);
        }
    }
}
