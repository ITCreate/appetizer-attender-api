<?php

namespace App\Http\Controllers\API;

use App\Models\AlcoholicBeverage;
use App\Http\Controllers\Controller;

class AlcoholicBeveragesController extends Controller
{
    public function index()
    {
        $res = AlcoholicBeverage::all();
        return response($res, 200);
    }
}
