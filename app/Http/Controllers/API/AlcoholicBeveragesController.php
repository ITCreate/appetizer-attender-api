<?php

namespace App\Http\Controllers\API;

use App\Models\AlcoholicBeverage;
use App\Http\Controllers\Controller;

class AlcoholicBeveragesController extends Controller
{
    public function index()
    {
        $res = AlcoholicBeverage::select(['id', 'name', 'image'])->get();
        return response($res, 200);
    }
}
