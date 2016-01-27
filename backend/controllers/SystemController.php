<?php
namespace backend\controllers;

use Yii;
/**
 * 系统管理
 */
class SystemController extends BaseController
{
      /**
     * 基本信息设置
     */
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
        return $this->render('addhelpcenter');
    }
}