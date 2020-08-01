<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NibblesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nibbles')->insert(
        [
            [
                    'name'  =>  'えだまめ',
                    'img_path'  =>  '.',
                    'flavor_id' =>  '3',
                    'comment'   => 'アテと言ったらこれ'
                ],
                [
                    'name'  =>  'からあげ',
                    'img_path'  =>  '.',
                    'flavor_id' =>  '4',
                    'comment'   =>  'うまい'
                ],
                [
                    'name'  =>  '塩竜田揚げ',
                    'img_path'  =>  '.',
                    'flavor_id' =>  '5',
                    'comment'   =>  'なんかしょっぱうまい'
                ]
        ]
        );
    }
}
