<?php
/**
 * access ApiKey model
 *
 * @author Ren
 * @date 2015-11-15
*/

class ApiKey extends RActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName()
    {
        return "apikey";
    }
}

?>
