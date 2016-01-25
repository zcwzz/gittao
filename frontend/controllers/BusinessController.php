<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * 安全保障
 */
class BusinessController extends Controller
{
	//发布兼职
    public function actionIndex()
    {
        return $this->render('index');
    }
	//兼职列表
	public function actionLists(){
		return $this->render('lists');
	}

}
