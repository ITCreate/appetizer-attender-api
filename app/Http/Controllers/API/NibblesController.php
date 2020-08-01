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
        $request = request();
        // or whereでいい感じにする
        $res = Nibble::all();
        return response($res, 200);

        // $content = request()->getContent();
        // $json = json_decode($content, true) ?? [];
        // $beverageQuery = AlcoholicBeverage::query();
        // $beverage = $beverageQuery->where('id', $json['beverage_id'])->first();

        // $q = DB::table('Nibbles');
        // if((bool)$beverage->sweet_flg) {
        //     $q->orwhere('sweet_flg', $beverage->sweet_flg);
        // }
        // if((bool)$beverage->acid_flg) {
        //     $q->orWhere('acid_flg', $beverage->acid_flg);
        // }
        // if((bool)$beverage->salt_flg) {
        //     $q->orWhere('salt_flg', $beverage->salt_flg);
        // }
        // if((bool)$beverage->bitter_flg) {
        //     $q->orWhere('bitter_flg', $beverage->bitter_flg);
        // }
        // if((bool)$beverage->spice_flg) {
        //     $q->orWhere('spice_flg', $beverage->spice_flg);
        // }
        // if((bool)$beverage->astringency_flg) {
        //     $q->orWhere('astringency_flg', $beverage->astringency_flg);
        // }
        // if((bool)$beverage->umami_flg) {
        //     $q->orWhere('umami_flg', $beverage->umami_flg);
        // }

        // return $q->get();
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
