<?php

use App\Models\AlcoholicBeverage;
use Illuminate\Database\Seeder;

class CreateAlcoholicBeveragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlcoholicBeverage::create([
            'name'            =>  '日本酒',
            'image'           =>  'http://placehold.it/300x500',
            'sweet_flg'       => true,
            'acid_flg'        => false,
            'salt_flg'        => false,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => true,
            'umami_flg'       => true,
        ]);

        AlcoholicBeverage::create([
            'name'            =>  'ビール',
            'image'           =>  'http://placehold.it/300x500',
            'sweet_flg'       => true,
            'acid_flg'        => false,
            'salt_flg'        => false,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => true,
            'umami_flg'       => true,
        ]);
    }
}
