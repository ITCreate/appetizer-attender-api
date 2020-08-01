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
            'name'            => '枝豆',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => 'ビールのおつまみの大定番。甘み引き立つうす塩味に仕上げました。',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        Nibble::create([
            'name'            => '冷奴',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '国産大豆と天然にがりを使用した「生搾り製法」。昔ながらの豆腐をだし醤油で。',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        Nibble::create([
            'name'            => 'チャンジャ',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => 'こりこりした食感、噛んでいくうちにわき上がる辛さと旨味。ビールがすすむこと間違いなし。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => true,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => 'キャベツ盛',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => 'シャキシャキ国産キャベツを醤油ベースのあっさりだれで仕上げました。こってりとした焼鳥と相性抜群おかわりは無料！',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        Nibble::create([
            'name'            => 'ピリ辛キューリ漬',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => 'ついつい手が出るピリ辛キューリ。ほどよい酸味のパリパリきゅうり。ピリ辛たれをマッチング。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => true,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        Nibble::create([
            'name'            => '味付煮玉子',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '料亭風のだしをしみこませ、上品に仕上げた玉子好きも大納得の一品。とろーり半熟の黄身が絶品です。',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => '冷やしトマト',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '爽やかで瑞々しいトマト。お酒のあてにも箸休めにも最適です。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => true,
            'umami_flg'       => false,
        ]);

        Nibble::create([
            'name'            => '唐揚',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => 'とりあえず唐揚!!淡路島産玉ねぎ使用の特製パウダーに漬け込み、サクサク、ジューシーな味に仕上げました。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            =>  '塩竜田揚げ',
            'image'           =>  'http://placehold.it/300x500',
            'comment'         =>  'なんかしょっぱうまい',
            'name'            => 'ポテトフライ',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '自然な甘味の国産じゃがいも使用。歯ざわりはほっこり、なめらか。バターソースやケチャップでどうぞ。',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => true,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => 'とり天',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '熱々のとり天に梅肉ソースを添えてどうぞ。ほのかな酸味としその香りが食欲を刺激。',
            'sweet_flg'       => false,
            'acid_flg'        => false,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => 'ポテトさらだ',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '北海道産のじゃがいもにオニオンスライス、かつお節を乗せて和風に仕上げました。',
            'sweet_flg'       => true,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => false,
        ]);

        Nibble::create([
            'name'            => '口水鶏',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '香辛料を効かせた中華ソースが食欲を誘うよだれもんの逸品。',
            'sweet_flg'       => true,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => true,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => '粗挽ポークソーセージ串焼',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '国産のポークを使用。しゃきっと噛めば、肉の旨味がしっかり、ジューシー。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => true,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => 'チキン南蛮',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '揚げたてのカリッとして香ばしい食感と、モモ肉のやわらかでジューシーな食感。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => true,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => 'カマンベールコロッケ',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '人気の秘密はもちトロ食感！カマンベール、クリーム、チェダーチーズをミックス、豊かな風味がやみつきに。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => 'ひざなんこつ唐揚',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => 'ビールのつまみに◎。サクサク、コリコリと噛むほどにうま味が味わえる。この塩味がたまらない。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => false,
            'spice_flg'       => false,
            'astringency_flg' => false,
            'umami_flg'       => true,
        ]);

        Nibble::create([
            'name'            => 'ふんわり山芋の鉄板焼',
            'image'           => 'http://placehold.it/300x500',
            'comment'         => '口の中で柔らかく溶ける山芋と、こくを感じるだしのハーモニー。濃厚な山芋の味が楽しめます。',
            'sweet_flg'       => false,
            'acid_flg'        => true,
            'salt_flg'        => true,
            'bitter_flg'      => true,
            'spice_flg'       => false,
            'astringency_flg' => true,
            'umami_flg'       => false,
        ]);
    }
}
