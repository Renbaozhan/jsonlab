<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaobaoController extends Controller
{

    /*
    @param string text
    @return array ret
    @note 获取淘宝产品列表
    @auth Ren
    @date 2017-09-27
    */
    public function products(Request $request){
        $data = $this->getProductList($request);
        return response()->json([
          'code'=>200,
          'message'=>'success',
          'data'=>$data,
        ]);
    }

    public function coupons(Request $request){
      $data = $this->getCouponsList();
      return response()->json([
        'code'=>200,
        'message'=>'success',
        'data'=>$data,
      ]);
    }

    private function getProductList(){
      $url = "http://gw.api.taobao.com/router/rest?";

      $param_arr = array(
        'sign_method' => "md5",
        'timestamp'=>date("Y-m-d H:i:s",time()),
        'v'=> "2.0",
        'fields' => "num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick",
        'app_key'=> "24789193",
        'method'=> "taobao.tbk.item.get",
        'format'=> "json",
        'cat'=>'16',
        'platform'=>2,
      );
      $param = $this->getParam($param_arr);
      return json_decode(file_get_contents($url.$param),true);
    }

    private function getCouponsList(){
      $url = "http://gw.api.taobao.com/router/rest?";
      $param_arr = array(
        'sign_method' => "md5",
        'timestamp'=>date("Y-m-d H:i:s",time()),
        'v'=> "2.0",
        'cat'=>'16',
        'app_key'=> "24789193",
        'method'=> "taobao.tbk.dg.item.coupon.get",
        'format'=> "json",
        'adzone_id'=>'338254662',
        'platform'=>2,
      );
      if(isset($request->q)){
          $param_arr['q']=$request->q;
      }
      if(isset($request->page_no)){
          $param_arr['page_no']=$request->page_no;
      }
      if(isset($request->page_size)){
          $param_arr['page_size']=$request->page_size;
      }
      if(isset($request->cat)){
          $param_arr['cat']=$request->cat;
      }
      $param = $this->getParam($param_arr);
      return json_decode(file_get_contents($url.$param),true);
    }

    private function getParam($param_arr){
      $app_secret = "a15bb91be6720339230062e18b52eac0";
      $sign_str = "";
      $param = "";
      ksort($param_arr);
      foreach ($param_arr as $key => $value) {
        $sign_str .= $key.$value;
        $param .= "&$key=".urlencode($value);
      }
      $sign = strtoupper(md5($app_secret.$sign_str.$app_secret));
      $param = "sign=$sign".$param;
      return $param;
    }

    protected function generateSign($params,$app_secret){
  		ksort($params);
  		$stringToBeSigned = $app_secret;
  		foreach ($params as $k => $v){
  			if(is_string($v) && "@" != substr($v, 0, 1)){
  				$stringToBeSigned .= "$k$v";
  			}
  		}
  		unset($k, $v);
  		$stringToBeSigned .= $app_secret;
  		return strtoupper(md5($stringToBeSigned));
  	}

}
