<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlcoholicBeveragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alcoholic_beverages')->insert(
            [
                [
                    'name'  =>  '日本酒',
                    'img_path'  =>  '.',
                    'flavor_id' =>  '1',
                ],
                [
                    'name'  =>  'ビール',
                    'img_path'  =>  '.',
                    'flavor_id' =>  '2',
                ]
            ]
        );
    }
}
