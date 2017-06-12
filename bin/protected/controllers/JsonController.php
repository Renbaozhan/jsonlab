<?php
/**
 * JsonController contains base json actions
 *
 * @author Ren
 * @date 2015/11/15
*/
class JsonController extends Controller {
    /**
     * render page api
     */
    public function actionApi(){
        $this->render('api');
    }

    /**
     * render page wiki
     */
    public function actionPrivacy(){
        $this->render('privacy');
    }


    /**
     * static no need to validate, auth is a function to validate
     * @param none
     * @return none
     */
    public function filterAuth($filterChain) {
        $filterChain->run();
    }

    /**
     * static no need to validate
     * @param none
     * @return none
     */
    public function filters(){
        return array(
        );
    }

}
