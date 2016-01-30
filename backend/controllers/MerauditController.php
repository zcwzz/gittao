<?php
namespace backend\controllers;

use Yii;
/*
*后台商家
*/
//加载model
use backend\models\FinMerchantBase;
use backend\models\FinUser;
/**
 * 商家审核管理
 */
class MerauditController extends BaseController
{
      /**
     * 商家信息审核
     */
    public function actionInfo(){
        $model = new FinMerchantBase;
        $arr = $model->selinfo();
        return $this->render('info',['arr'=>$arr]);
    }
     /**
     * 发布兼职审核
     */
    public function actionPart()
    {
        return $this->render('part');
    }
     /**
     * 发布类型审核
     */
    public function actionType()
    {
        return $this->render('type');
    }
    /**
     * 商家退款信息
     */
    public function actionRefund()
    {
        return $this->render('refund');
    }
    /**
     * 申请限额审核
     */
    public function actionQuota()
    {
        return $this->render('quota');
    }
}