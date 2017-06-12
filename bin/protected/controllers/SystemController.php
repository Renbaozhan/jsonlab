<?php
/**
 * SystemController is the default controller when access the server
 *
 * @author Ren
 * @date 2015/11/15
*/
class SystemController extends Controller {

    public function filters() {
        return array(
            'auth - error',
            'actionLog',
        );
    }

    public function actionIndex() {
        $this->render('/json/api');
    }

	public function actionResources() {
        $this->render('list');
	}

    public function actionError() {
        $error=Yii::app()->errorHandler->error;
        $this->render('error', array('error'=>$error));
    }

    public function actionDebug() {
        $this->error('ahhaa');
    }

}
