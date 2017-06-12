<?php
/**
 * ServiceController contains the interface service
 *
 * @author Ren
 * @date 2015/11/15
*/
class ServiceController extends Controller {
    /**
     * get the data with json format by page
     * @param none
     * @return the json data
     */
    public function actionGetData() {
        $keyword = addslashes(trim($_GET['keyword']));
        $condition = "1=1 ";
        if ($keyword) {
            $condition = $condition." and name like '%$keyword%'";
        }
        if (isset($_GET['page_num']) && is_numeric($_GET['page_num'])) {
            $page_num = intval($_GET['page_num']);
        }else{
            $page_num = 1;
        }
        if (isset($_GET['page_size'])  && is_numeric($_GET['page_size'])) {
            $page_size = intval($_GET['page_size']);
        }else{
            $page_size = 10;
        }
        $result = ServiceManager::findAll($page_num, $page_size, $condition);
        //pagination
        $criteria = new CDbCriteria();
        $criteria->condition = $condition;
        $records = Service::model()->findAll($criteria);
        $number = count($records);
        $sum_page = ceil($number / $page_size);
        $result = array(
            'sum_page' => $sum_page,
            'data' => $result,
            'sum_count' => $number,
        );
        echo CJSON::encode($result);
    }

}
