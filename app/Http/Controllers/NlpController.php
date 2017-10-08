<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NlpController extends Controller
{

    /*
    @param string text
    @return array ret
    @note 中文切词
    @auth Ren
    @date 2017-09-27
    */
    public function wordcut(Request $request){
        $data = array();
        if(isset($request->text)){
            $data[] = $request->text;
        }
        return response()->json([
          'code'=>200,
          'message'=>'success',
          'data'=>$data,
        ]);
    }
}
