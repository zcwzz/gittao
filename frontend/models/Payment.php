<?php

namespace frontend\models;
use Yii;
use yii\db\ActiveRecord;
use yii\data\Pagination;
/**
 * This is the model class for table "fin_payment".
 *
 * @property integer $payment_id
 * @property integer $user_id
 * @property integer $payment_type
 * @property integer $payment_addtime
 * @property string $payment_money
 * @property string $payment_note
 * @property integer $payment_way
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fin_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'payment_type', 'payment_addtime', 'payment_money', 'payment_note', 'payment_way'], 'required'],
            [['user_id', 'payment_type', 'payment_addtime', 'payment_way'], 'integer'],
            [['payment_money'], 'number'],
            [['payment_note'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'user_id' => 'User ID',
            'payment_type' => 'Payment Type',
            'payment_addtime' => 'Payment Addtime',
            'payment_money' => 'Payment Money',
            'payment_note' => 'Payment Note',
            'payment_way' => 'Payment Way',
        ];
    }
    //账户余额
    public function balance($where){
        $data['balance'] = $this->find()
            ->select(['mer_id','mer_money'])
            ->from('fin_merchant_base')
            ->where($where)
            ->asarray()
            ->one();
        return $data;
    }
	public function payment_list($where){
        $rows=$this->find()
            ->select('count(*) as num')
            ->from('fin_payment')
            ->where($where)
            ->asarray()
            ->one();
        //echo $rows['num'];die;
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' =>$rows['num'],
        ]);
        $data['lists']= $this->find()
            ->select('*')
            ->from('fin_payment')
            ->where($where)
            ->offset($pagination->offset)
            ->limit($pagination->limit)
			->orderBy('payment_addtime desc')
            ->asarray()
            ->all();
        //print_r($data['lists']);
        $data['pagination']=$pagination;
        return $data;
	}
}
