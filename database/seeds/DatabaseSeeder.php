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
        $this->call(AlcoholicBeveragesSeeder::class);
        $this->call(NibblesSeeder::class);
        $this->call(FlavorsSeeder::class);
    }
}
