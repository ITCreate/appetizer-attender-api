<?php

namespace App\Http\Controllers\API;

use App\Models\AlcoholicBeverage;
use App\Models\Nibble;
use App\Models\MatchFusion;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class NibblesController extends Controller
{
    public function index()
    {
        $alcoholicBeverage = json_decode(request()->alcoholicBeverage);

        if (collect(request())->isEmpty()) {
            return response([], 200);
        }

        $nibbles = Nibble::query();
        $isFirstWhere = true;
        $flags = ['sweet_flg', 'acid_flg', 'salt_flg', 'bitter_flg', 'spice_flg', 'astringency_flg', 'umami_flg'];
        foreach ($flags as $flg) {
            if ($alcoholicBeverage->$flg) {
                $isFirstWhere ? $nibbles->where($flg, true) : $nibbles->orWhere($flg, true);
                $isFirstWhere = false;
            }
        }
        $nibbles = $nibbles->get();
        return response($nibbles, 200);
    }

    public function result()
    {
        $content = request()->getContent();
        $json = json_decode($content, true) ?? [];

        if (count($json['select_nibbles'])<2) {
            return response([], 200);
        }

        $newMatchFusion = new MatchFusion();
        $newMatchFusion->alcoholic_beverage_id = $json['alcoholic_beverage_id'];

        foreach ($json['select_nibbles'] as $niddle) {
            $selectNiddleIds[] = $niddle['id'];
        }

        $match = [];
        $keys = array_rand($selectNiddleIds, 2);
        foreach ($keys as $key) {
            $match[] = $selectNiddleIds[$key];
        }
        foreach ($keys as $key) {
            unset($selectNiddleIds[$key]);
        }
        array_values($selectNiddleIds);

        $newMatchFusion->one_nibble_id = $match[0];
        $newMatchFusion->two_nibble_id = $match[1];

        $existMatchFusion = DB::table('match_fusions')
            ->where('alcoholic_beverage_id', $newMatchFusion->alcoholic_beverage_id)
            ->where('one_nibble_id', $newMatchFusion->one_nibble_id)
            ->where('two_nibble_id', $newMatchFusion->two_nibble_id)
            ->first();

        if (empty($existMatchFusion)) {
            $newMatchFusion->save();
            $matchFusion = $newMatchFusion;
        } else {
            $matchFusion = $existMatchFusion;
        }

        $alcoholicBeverages = DB::table('alcoholic_beverages')->find($matchFusion->alcoholic_beverage_id);

        $oneNiddle = DB::table('Nibbles')->find($matchFusion->one_nibble_id);
        $twoNiddle = DB::table('Nibbles')->find($matchFusion->two_nibble_id);

        $selectNiddles = DB::table('Nibbles')->whereIn('id', $selectNiddleIds)->get();

        $candidates = [];
        foreach ($selectNiddles as $selectNiddle) {
            $candidates[] = [
                'name' => $selectNiddle->name,
                'image' => $selectNiddle->image
            ];
        }

        $resultArray = [
            'match' => [
                'id' => $matchFusion->id,
                'alcoholic_beverage' => [
                    'name' => $alcoholicBeverages->name,
                    'image' => $alcoholicBeverages->image
                ],
                'one_nibble' => [
                    'name' => $oneNiddle->name,
                    'image' => $oneNiddle->image
                ],
                'two_nibble' => [
                    'name' => $twoNiddle->name,
                    'image' => $twoNiddle->image
                ]
            ],
            'candidates' => $candidates
        ];

        return response(json_encode($resultArray), 200);
    }
}
