<?php

namespace App\Http\Controllers\API;

use App\Models\AlcoholicBeverage;
use App\Models\Nibble;
use App\Http\Controllers\Controller;

class NibblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return void
     */
    public function select()
    {
        $request = request();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function result()
    {
        $request = request();
    }
}
