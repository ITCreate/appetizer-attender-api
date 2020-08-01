<?php

namespace App\Http\Controllers\API;

use App\Models\AlcoholicBeverage;
use App\Http\Controllers\Controller;

class AlcoholicBeveragesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlcoholicBeverage::select(['id', 'name', 'image'])->get();
    }
}
