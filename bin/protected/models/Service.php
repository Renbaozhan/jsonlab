<?php
/**
 * access Interface model
 *
 * @author Ren
 * @date 2015-11-15
*/

class Service extends RActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName()
    {
        return "service";
    }
}

?>
