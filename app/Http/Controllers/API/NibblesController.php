<?php

namespace App\Http\Controllers\API;

use App\Models\AlcoholicBeverage;
use App\Models\Nibble;
use App\Http\Controllers\Controller;

class NibblesController extends Controller
{
    public function index()
    {
        $request = request();
        // or whereでいい感じにする
        $res = Nibble::all();
        return response($res, 200);
    }

    public function result()
    {
        $request = request();
        return response([], 200);
    }
}
