<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * 后台框架
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * 欢迎界面
     */
    public function actionWelcome()
    {
        return $this->render('welcome');
    }

    
}
