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
            'name'            => 'ハイボール',
            'image'           => asset('storage/alcoholicBeverages/highball.jpg'),
            'sweet_flg'       => true,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => true,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        AlcoholicBeverage::create([
            'name'            => 'ビール',
            'image'           => asset('storage/alcoholicBeverages/beer.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        AlcoholicBeverage::create([
            'name'            => 'ウイスキー',
            'image'           => asset('storage/alcoholicBeverages/whiskey.jpg'),
            'sweet_flg'       => true,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        AlcoholicBeverage::create([
            'name'            => 'チューハイ',
            'image'           => asset('storage/alcoholicBeverages/chu_hi.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        AlcoholicBeverage::create([
            'name'            => '梅酒',
            'image'           => asset('storage/alcoholicBeverages/plum_wine.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        AlcoholicBeverage::create([
            'name'            => 'カクテル',
            'image'           => asset('storage/alcoholicBeverages/cocktails.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
            'umami_flg'       => true,
        ]);

        AlcoholicBeverage::create([
            'name'            => 'ワイン',
            'image'           => asset('storage/alcoholicBeverages/wine.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        AlcoholicBeverage::create([
            'name'            => '焼酎',
            'image'           => asset('storage/alcoholicBeverages/shochu.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => true,
            'umami_flg'       => false,
        ]);

        AlcoholicBeverage::create([
            'name'            => '日本酒',
            'image'           => asset('storage/alcoholicBeverages/sake.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => true,
            'umami_flg'       => false,
        ]);

        AlcoholicBeverage::create([
            'name'            => '果実酒',
            'image'           => asset('storage/alcoholicBeverages/fruit_wine.jpg'),
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);
    }
}
