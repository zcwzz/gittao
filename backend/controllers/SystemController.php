<?php
namespace backend\controllers;

use Yii;
use backend\models\Helptitle;
use backend\models\Helpcontent;
/**
 * 系统管理
 */
class SystemController extends BaseController
{
      /**
     * 基本信息设置
     */
    public $enableCsrfValidation = false;
    public function actionInfo()
    {
        return $this->render('info');
    }
      
     /**
     * 系统日志
     */
    public function actionLog()
    {
        return $this->render('log');
    }
    /**
     * 帮助中心
     */
    public function actionHelpcenter()
    {
        return $this->render('helpcenter');
    }
    /**
     * add帮助中心
     */
    public function actionAddhelpcenter()
    {
        $model = new Helptitle();
        $data = $model->helplist();
        //print_r($data);die;
        return $this->render('addhelpcenter',['helplist'=>$data['title']]);
    }
    /**
     * add分类
     */
    public function actionAddtitle(){
        $title = Yii::$app->request->post('title');
        $model = new Helptitle();
        $model->helptitle_name = $title;
        $model->is_show = 1;
        $model->addtime = time();
        $model->helptitle_pid = 0;
        $model->helptitle_sort = 0;
        $res = $model->save();
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    /**
     * add分类
     */
    public function actionAddcontent(){
        $content = new Helpcontent();
        $title = new Helptitle();
        $help_title = Yii::$app->request->post('help_title');
        $help_title_id = Yii::$app->request->post('help_title_id');
        $title->helptitle_name = $help_title;
        $title->is_show = 1;
        $title->addtime = time();
        $title->helptitle_pid = $help_title_id;
        $title->helptitle_sort = 0;
        $title->save();
        $id=$title->primaryKey;//回去当前插入的id
        $content->helptitle_id = $id;
        $content->helpcontent = $_POST['content'];
        $content->addtime = time();
        $content->updtime = time();
        $c = $content->save();
        if($c){
            echo 1;
        }else{
            echo 0;
        }
    }
}