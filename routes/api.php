<?php

use Illuminate\Http\Request;
Use App\Service;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('taobao/products', 'TaobaoController@products');
Route::any('taobao/categories', 'TaobaoController@categories');
Route::any('taobao/product/{num_iids}', 'TaobaoController@product');
Route::any('taobao/coupons', 'TaobaoController@coupons');
Route::any('taobao/nine', 'TaobaoController@nine');
Route::any('taobao/juhuasuan', 'TaobaoController@juhuasuan');
Route::any('taobao/taoqianggou', 'TaobaoController@taoqianggou');
Route::any('taobao/password', 'TaobaoController@password');

Route::any('nlp/text/label', 'NlpController@wordcut');
Route::any('nlp/text/extract', 'NlpController@wordcut');
Route::any('nlp/text/classify', 'NlpController@wordcut');
Route::any('nlp/text/motion', 'NlpController@wordcut');
