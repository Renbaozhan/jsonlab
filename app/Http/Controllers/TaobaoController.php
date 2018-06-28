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

    /*
    @param string item_id
    @return array ret
    @note 获取淘宝单品详情
    @auth Ren
    @date 2017-09-27
    */
    public function product(Request $request){
        $data = array();
        if(!isset($request->num_iids)){
          return response()->json([
            'code'=>400,
            'message'=>'num_iids required',
            'data'=>$data,
          ]);
        }
        $data = $this->getProduct($request);
        return response()->json([
          'code'=>200,
          'message'=>'success',
          'data'=>$data,
        ]);
    }

    public function coupons(Request $request){
      $data = $this->getCouponsList($request);
      return response()->json([
        'code'=>200,
        'message'=>'success',
        'data'=>$data,
      ]);
    }

    public function password(Request $request){
      $taobao_api = "taobao.tbk.tpwd.create";
      $params = array(
        'text'=>$request->text,
        'url'=>$request->url,
      );
      return $this->getTaobaoData($request, $taobao_api, $params);
    }

    private function getProduct(Request $request){
      $taobao_api = "taobao.tbk.item.info.get";
      if(isset($request->num_iids)){
          $params['num_iids']=$request->num_iids;
      }
      return $this->getTaobaoData($request, $taobao_api, $params);
    }

    private function getProductList(Request $request){
      $taobao_api = "taobao.tbk.item.get";
      $params = array(
      );
      if(isset($request->q)){
          $params['q']=$request->q;
      }
      if(isset($request->fields)){
          $params['fields']=$request->fields;
      }
      if(isset($request->sort)){
          $params['sort']=$request->sort;
      }
      if(isset($request->page_no)){
          $params['page_no']=$request->page_no;
      }
      if(isset($request->page_size)){
          $params['page_size']=$request->page_size;
      }
      if(isset($request->cat)){
          $params['cat']=$request->cat;
      }

      return $this->getTaobaoData($request, $taobao_api, $params);
    }

    private function getCouponsList(Request $request){
      //淘宝客基础接口：淘宝客物料下行-导购
      $params = array(
          'material_id'=>3786,
      );
      if(isset($request->material_id)){
          $params['material_id']=$request->material_id;
      }
      $taobao_api = "taobao.tbk.dg.optimus.material";
      return $this->getTaobaoData($request, $taobao_api, $params);
    }

    private function getTaobaoData(Request $request,$taobao_api,$params=array()){
      $url = "http://gw.api.taobao.com/router/rest?";
      $param_arr = array(
        'sign_method' => "md5",
        'timestamp'=>date("Y-m-d H:i:s",time()),
        'v'=> "2.0",
        'app_key'=> "24789193",
        'method'=> $taobao_api,
        'format'=> "json",
        'adzone_id'=>'338254662',
        'site_id'=>'42362088',
        'platform'=>2,
      );
      $param_arr = array_merge($param_arr,$params);
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
