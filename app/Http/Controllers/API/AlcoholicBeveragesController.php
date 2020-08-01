<?php

namespace App\Http\Controllers\API;

use App\AlcoholicBeverage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlcoholicBeveragesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlcoholicBeverage::all();
    }
}
