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
        // $request = request();
        // // or whereでいい感じにする
        // $res = Nibble::all();
        // return response($res, 200);

        $beverageId = $request->get('beverage_id');
        $beverageQuery = AlcoholicBeverage::query();
        $beverage = $beverageQuery->where('id', $beverageId)->first();

        $q = DB::table('Nibbles')
            ->leftJoin('Flavors','flavors.id','=','nibbles.flavor_id');
        if((bool)$beverage->flavor->sweet_flg) {
            $q->orwhere('sweet_flg', $beverage->flavor->sweet_flg);
        }
        if((bool)$beverage->flavor->acid_flg) {
            $q->orWhere('acid_flg', $beverage->flavor->acid_flg);
        }
        if((bool)$beverage->flavor->salt_flg) {
            $q->orWhere('salt_flg', $beverage->flavor->salt_flg);
        }
        if((bool)$beverage->flavor->bitter_flg) {
            $q->orWhere('bitter_flg', $beverage->flavor->bitter_flg);
        }
        if((bool)$beverage->flavor->spice_flg) {
            $q->orWhere('spice_flg', $beverage->flavor->spice_flg);
        }
        if((bool)$beverage->flavor->astringency_flg) {
            $q->orWhere('astringency_flg', $beverage->flavor->astringency_flg);
        }
        if((bool)$beverage->flavor->umami_flg) {
            $q->orWhere('umami_flg', $beverage->flavor->umami_flg);
        }

        return $q->get();
    }

    public function result()
    {
        $request = request();
        return response([], 200);
    }
}
