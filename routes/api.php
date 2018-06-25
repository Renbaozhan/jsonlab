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
Route::get('nlp/wordcut/{text}', 'NlpController@wordcut');
Route::any('taobao/products', 'TaobaoController@products');
<<<<<<< HEAD
Route::any('taobao/coupons', 'TaobaoController@coupons');
=======
>>>>>>> 87394085b1f692c2cb9351f73fddfda5b5e9a9fc
