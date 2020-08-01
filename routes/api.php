<?php

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

// お酒一覧
Route::get('alcoholic_beverages', 'AlcoholicBeveragesController@index');

// おつまみ一覧
Route::get('nibbles', 'NibblesController@index');

// スワイプした結果のおつまみIDを受け取って、その中で(一旦)ランダムに2つを選び返す 拡張・組み合わせに対するレビューや評価を返す
Route::get('nibbles/result', 'NibblesController@result');

// レビューページのコメント等の取得
Route::get('review', 'ReviewController@index');

// レビューページでコメントを投稿する
Route::post('review', 'ReviewController@store');
