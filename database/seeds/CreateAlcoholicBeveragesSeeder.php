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
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => false,
            'bitter_flg'      => false,
            'name'            => 'ハイボール',
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        AlcoholicBeverage::create([
            'name'            =>  'ビール',
            'image'           =>  'http://placehold.it/300x500',
            'name'            => 'ビール',
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
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
            'image'           => 'http://placehold.it/300x500',
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
