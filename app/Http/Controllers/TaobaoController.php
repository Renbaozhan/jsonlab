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
    @param string text
    @return array ret
    @note 获取淘宝类目列表
    @auth Ren
    @date 2017-09-27
    */
    public function categories(Request $request){
        $data = $this->getCategoryList($request);
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

    /*
    @param string item_id
    @return array ret
    @note 获取淘宝优惠券列表
    @auth Ren
    @date 2017-09-27
    */
    public function coupons(Request $request){
      $data = $this->getCouponsList($request);
      return response()->json([
        'code'=>200,
        'message'=>'success',
        'data'=>$data,
      ]);
    }

    /*
    @param string item_id
    @return array ret
    @note 获取淘宝9块9包邮数据
    @auth Ren
    @date 2017-09-27
    */
    public function nine(Request $request){
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
    @note 获取淘宝聚划算数据接口
    @auth Ren
    @date 2017-09-27
    */
    public function juhuasuan(Request $request){


      return $this->formatResponse(200,"success",$data);
    }

    private function getCategoryList($request){
      $result = array(
        array('name' => "今日精选", "cid"=>""),
        array('name' => "女装", "cid"=>16),
        array('name' => "男装", "cid"=>30),
        array('name' => "母婴", "cid"=>35),
        array('name' => "食品", "cid"=>50002766),
        array('name' => "宠物", "cid"=>29),
        array('name' => "数码家电", "cid"=>50008090),
        array('name' => "家居家装", "cid"=>21),
        array('name' => "汽车用品", "cid"=>26),
        array('name' => "成人用品", "cid"=>2813),
      );
      return $result;
    }

    /*
    @param string item_id
    @return array ret
    @note 获取淘宝淘抢购数据接口
    @auth Ren
    @date 2017-09-27
    */
    public function taoqianggou(Request $request){
      $params = array(
        'fields'=>"user_type,num_iid,click_url,pic_url,reserve_price,zk_final_price,total_amount,sold_num,title,category_name,start_time,end_time",
      );
      if(isset($request->page_no)){
          $params['page_no']=$request->page_no;
      }
      if(isset($request->page_size)){
          $params['page_size']=$request->page_size;
      }
      if(isset($request->start_time)){
          $params['start_time']=$request->start_time;
      }else{
          $params['start_time']=date("Y-m-d H:00:00", time()-0*60*60);
      }
      if(isset($request->end_time)){
          $params['end_time	']=$request->end_time	;
      }else{
          $params['end_time']=date("Y-m-d H:00:00",time()+1*60*60);
      }
      $taobao_api = "taobao.tbk.ju.tqg.get";

      return $this->getTaobaoData($request, $taobao_api, $params);
    }
    /*
    @param string item_id
    @return array ret
    @note 淘口令转换接口
    @auth Ren
    @date 2017-09-27
    */
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
      $taobao_api = "taobao.tbk.dg.material.optional";
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
      if(isset($request->has_coupon)){
          $params['has_coupon']=$request->has_coupon;
      }
      if(isset($request->start_price)){
          $params['start_price']=$request->start_price;
      }
      if(isset($request->end_price)){
          $params['end_price']=$request->end_price;
      }
      if(isset($request->need_free_shipment)){
          $params['need_free_shipment']=$request->need_free_shipment;
      }
      if(isset($request->cat)){
          $params['cat']=$request->cat;
      }

      return $this->getTaobaoData($request, $taobao_api, $params);
    }

    private function getCouponsList(Request $request){
      //淘宝客基础接口：好券清单API【导购】
      $params = array(
      );
      if(isset($request->cat)){
          $params['cat']=$request->cat;
      }
      if(isset($request->q)){
          $params['q']=$request->q;
      }
      $taobao_api = "taobao.tbk.dg.item.coupon.get";
      return $this->getTaobaoData($request, $taobao_api, $params);
    }
    private function getJuhuasuanList(Request $request){
      //淘宝客基础接口：聚划算商品搜索接口
      $params = array(
        'pid'=>'mm_11711491_42362088_338254662',
      );
      if(isset($request->postage)){
          $params['postage']=$request->postage;
      }
      if(isset($request->status)){
          $params['status']=$request->status;
      }
      if(isset($request->current_page)){
          $params['current_page']=$request->current_page;
      }
      if(isset($request->page_size)){
          $params['page_size']=$request->page_size;
      }
      $taobao_api = "taobao.ju.items.search";
      $param_top_item_query = array('param_top_item_query' => $params );
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
      if(isset($request->page_no)){
          $param_arr['page_no']=$request->page_no;
      }
      if(isset($request->page_size)){
          $param_arr['page_size']=$request->page_size;
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

    private function formatResponse($code,$msg,$data){
      return response()->json([
        'code'=>$code,
        'message'=>$msg,
        'data'=>$data,
      ]);
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
