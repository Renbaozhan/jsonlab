<?php
/**
 * apiController contains the systems api for external service
 *
 * @author Ren
 * @date 2015/11/15
*/
class ApiController extends Controller {

    public function actionWhois(){
        if(isset($_GET['domain'])){
            $domain = trim(addslashes($_GET['domain']));
        }else{
            echo ToolManager::JsonResult(1,"缺少必须参数domain");
            return;
        }
        $url = API_SERVER."?action=whois&domain={$domain}";
        echo file_get_contents($url);
    }
    public function actionIPInfo(){
        if(isset($_GET['ip'])){
            $ip = trim(addslashes($_GET['ip']));
        }else{
            echo ToolManager::JsonResult(1,"缺少必须参数ip");
            return;
        }
        $url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip={$ip}";
        echo file_get_contents($url);
    }

    /**
     * 提供临时的验证机制, 验证拦截器
     *
     */
    public function filterKey($filterChain) {
        if(isset($_REQUEST['key'])){
            $key = trim(addslashes($_REQUEST['key']));
            //check key and call number here

            $filterChain->run();
        }else{
            echo ToolManager::JsonResult(1,"缺少必须参数key");
        }
    }

    /**
     * 默认api不需要验证
     *
     */
    public function filters(){
        return array(
            'Key',
        );
    }

}
