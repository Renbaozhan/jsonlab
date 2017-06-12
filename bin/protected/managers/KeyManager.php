<?php
/**
 * KeyManager
 *
 * @author Ren
 * @date 2014/10/16
 */

class KeyManager {
    /**
     * get the records content by page
     * @return the records content
     */
    public static function findAll($page_num, $page_size = 10, $condition = "1 = 1", $with = ""){
        $criteria = new CDbCriteria();
        $criteria->limit = $page_size;   //取1条数据，如果小于0，则不作处理
        $criteria->offset = ($page_num - 1) * $page_size;   //两条合并起来，则表示 limit 10 offset1,或者代表了。limit 1,10
        $criteria->order = 't.id DESC' ;//排序条件
        $criteria->condition = $condition;
        $criteria->together = TRUE;
        $criteria->with = $with;
        $records = Service::model()->findAll($criteria);
        return $records;
    }

    /**
     * get record by id
     * @return the check result
     */
    public static function findById($id){
        $criteria = new CDbCriteria();
        $criteria->condition = "id = ".$id;
        $record = Service::model()->find($criteria);
        return $record;
    }
    /**
     * add new record to db
     * @param record 对象
     * @return none 失败抛出异常
     */
    public static function add(&$record) {
        try {
            $ret = $record->save();
        } catch (Exception $ex) {
            throw new Exception($ret."add record failed:".$ex->getMessage());
        }
        return $ret;

    }
    /**
     * edit record
     * @param record 对象
     * @return none 失败抛出异常
     */
    public static function edit(&$record) {
        try {
            $ret = $record->save();
        } catch (Exception $ex) {
            throw new Exception($ret."edit record failed:".$ex->getMessage());
        }
        return $ret;

    }
    /**
     * delete the record by id
     * @param record 对象
     * @return the record delete result
     */
    public static function delete($id){
        $record = ServiceManager::findById($id);
        $record->is_delete = 1;
        try {
            $ret = $record->update();

        } catch (Exception $ex) {
             throw new Exception($ret."delete failed:".$ex->getMessage());
        }
        return $ret;
    }

}
