<?php

use App\Models\Nibble;
use Illuminate\Database\Seeder;

class CreateNibblesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nibble::create([
            'name'            =>  'えだまめ',
            'image'           =>  'http://placehold.it/300x500',
            'comment'         => 'アテと言ったらこれ',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        Nibble::create([
            'name'            =>  'からあげ',
            'image'           =>  'http://placehold.it/300x500',
            'comment'         =>  'うまい',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => false,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            =>  '塩竜田揚げ',
            'image'           =>  'http://placehold.it/300x500',
            'comment'         =>  'なんかしょっぱうまい',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);
    }
}
