<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// お酒の一覧を返す
Route::get('alcoholic_beverages', 'API\AlcoholicBeveragesController@index');

// お酒のIDを元に適したおつまみの一覧を返す
Route::post('select_nibbles', 'API\NibblesController@select');

// スワイプした結果のおつまみIDを受け取って、その中で(一旦)ランダムに2つを選び返す 拡張・組み合わせに対するレビューや評価を返す
Route::post('nibbles/result', 'API\NibblesController@result');