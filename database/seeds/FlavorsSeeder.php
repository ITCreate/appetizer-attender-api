<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlavorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flavors')->insert(
    [
        [
                'sweet_flg' => 1,
                'acid_flg'  => 0,
                'salt_flg'  => 0,
                'bitter_flg' => 0,
                'spice_flg' => 0,
                'astringency_flg' => 1,
                'umami_flg' => 1
            ],
            [
                'sweet_flg' => 0,
                'acid_flg'  => 1,
                'salt_flg'  => 1,
                'bitter_flg' => 1,
                'spice_flg' => 1,
                'astringency_flg' => 0,
                'umami_flg' => 0
            ],
            [
                'sweet_flg' => 0,
                'acid_flg'  => 0,
                'salt_flg'  => 1,
                'bitter_flg' => 0,
                'spice_flg' => 0,
                'astringency_flg' => 0,
                'umami_flg' => 0
            ],
            [
                'sweet_flg' => 0,
                'acid_flg'  => 0,
                'salt_flg'  => 0,
                'bitter_flg' => 0,
                'spice_flg' => 0,
                'astringency_flg' => 0,
                'umami_flg' => 1
            ],
            [
                'sweet_flg' => 0,
                'acid_flg'  => 0,
                'salt_flg'  => 1,
                'bitter_flg' => 0,
                'spice_flg' => 0,
                'astringency_flg' => 0,
                'umami_flg' => 1
            ]
        ]
    );
    }
}
