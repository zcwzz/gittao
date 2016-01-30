<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fin_shop_limit_apply".
 *
 * @property integer $mer_id
 * @property string $apply_limit
 * @property string $apply_reason
 * @property integer $is_pass
 * @property integer $apply_time
 */
class FinShopLimitApply extends \yii\db\ActiveRecord{
    /**
     * @inheritdoc
     */
    public $mer_paypassword;
    public $mer_money;//预收余额
    public $mer_limimoney;//预收限额
    public static function tableName(){
        return 'fin_shop_limit_apply';
    }
    /*
    *添加入库
    */
    public function applyadd($data){
       $arr = new FinShopLimitApply;
       $arr->apply_limit = $data['FinShopLimitApply']['apply_limit'];
       $arr->mer_money = $data['FinShopLimitApply']['mer_money'];
       $arr->mer_limimoney = $data['FinShopLimitApply']['mer_limimoney'];
       $arr->apply_time = time();
       $arr->save();
       print_r($arr);

      
    }

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            [['apply_limit'], 'number'],
            [['is_pass', 'apply_time'], 'integer'],
            [['apply_reason'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(){
        return [
            'mer_id' => 'Mer ID',
            'apply_limit' => '预售额申请',
            'apply_reason' => 'Apply Reason',
            'is_pass' => 'Is Pass',
            'apply_time' => 'Apply Time',
            'mer_paypassword'=>'支付密码',
            'mer_money'=>'预收余额：',
            'mer_limimoney'=>'预收限额：',
        ];
    }
}
