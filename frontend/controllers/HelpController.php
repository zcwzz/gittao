<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Helptitle;
use frontend\models\Helpcontent;

/**
 * 关于我们
 */
class HelpController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex(){
        $model = new Helptitle();
        $data = $model->helplist();
        return $this->render('index',['helplist'=>$data['title'],'content'=>$data['content']]);
    }
    public function actionContent(){
        $id = \Yii::$app->request->post('id');
        //echo $id;die;
        $model = new Helpcontent();
        $data = $model->helpcontent($id);
        //print_r($data);die;
        return $this->renderPartial('content',['content'=>$data['content']]);
    }

}
