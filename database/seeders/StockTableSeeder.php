<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("stock")->insert([
            "partenaire" => 7,
            "magasin" => 12,
            "resteProduit" => $faker->numberBetween(5,30),
            "QteEntree" => $faker->numberBetween(5,15),
            "soldeStock" => $faker->numberBetween(15000.30000),
            "DateStock" => now(),
            "produit" => 9
            ]);
    }
}
