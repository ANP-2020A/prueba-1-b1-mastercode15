<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Customer::truncate();
        $faker = \Faker\Factory::create();

        // Crear clientes ficticios en la tabla
        for ($i = 0; $i < 15; $i++) {
            Customer::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'document' => $faker->sentence,
            ]);
        }
    }
}
