<?php
/**
 * A encapsulated class used to common functions
 * @date 2014-11-26
 * @author Ren
*/
class ToolManager {


    public static function ArrayResult($status, $msg, $data = array()) {
        return array(
            "status" => $status,
            "message" => $msg,
            "data" => $data);
    }

    public static function JsonResult($status, $msg, $data = array()){
        return json_encode(ToolManager::ArrayResult($status, $msg, $data));
    }

    public static function sendMsg($mobile, $msg){
        $ch = curl_init();
        $api_key = "f908ce7c9b9b882520555daf195bc835";
        $content= "【车宝联盟】:".urlencode($msg);
        $url = "http://apis.baidu.com/kingtto_media/106sms/106sms?mobile={$mobile}&content={$content}";
        $header = array(
            "apikey: {$api_key}",
        );
        // 添加apikey到header
        curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $res = curl_exec($ch);
        //$res = @simplexml_load_string($res,NULL,LIBXML_NOCDATA);
        //$res = json_decode(json_encode($res),true);
        return $res;
    }

    public static function post($url, $post = null, $retries = 1){
        $curl = curl_init($url);
        if(is_resource($curl) === true){
                curl_setopt($curl, CURLOPT_FAILONERROR, true);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

                if(isset($post) === true){
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, (is_array($post) === true) ? http_build_query($post, "", "&"): $post);
                }

                $result = false;

                while(($result === false) && ($retries > 0)){
                    $retries--;
                    $result = curl_exec($curl);
                }

                curl_close($curl);
        }

        return $result;
    }
}
?>
