<?php

namespace App\Http\Controllers\API;

use App\Models\AlcoholicBeverage;
use App\Models\Nibble;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
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
        $request = request();
        return response([], 200);
    }
}
