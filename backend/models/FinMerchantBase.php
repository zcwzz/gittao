<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fin_merchant_base".
 *
 * @property integer $mer_id
 * @property string $mer_name
 * @property string $mer_phone
 * @property string $mer_paypassword
 * @property string $mer_contact
 * @property string $mer_conphone
 * @property string $mer_position
 * @property integer $mer_level
 * @property integer $mer_province
 * @property integer $mer_city
 * @property integer $mer_area
 * @property string $mer_address
 * @property string $mer_money
 * @property string $mer_limimoney
 * @property integer $ind_type
 * @property integer $ind_type_child
 * @property string $mer_logo
 * @property string $mer_license
 * @property string $mer_registration
 * @property string $mer_ allow
 * @property string $mer_positive
 * @property string $mer_reverse
 * @property string $mer_image1
 * @property string $mer_image2
 * @property string $mer_image3
 * @property string $mer_start
 * @property string $mer_end
 * @property integer $mer_isshow
 * @property string $mer_introduce
 * @property integer $register_time
 */
class FinMerchantBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fin_merchant_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mer_level', 'mer_province', 'mer_city', 'mer_area', 'ind_type', 'ind_type_child', 'mer_isshow', 'register_time'], 'integer'],
            [['mer_money', 'mer_limimoney'], 'number'],
            [['mer_start', 'mer_end'], 'safe'],
            [['mer_introduce'], 'string'],
            [['mer_name', 'mer_contact', 'mer_position'], 'string', 'max' => 30],
            [['mer_phone', 'mer_conphone'], 'string', 'max' => 11],
            [['mer_name','mer_contact','mer_conphone','mer_position','mer_address','mer_introduce','mer_positive'],'required','message'=>'此项不能为空'],
            [['mer_paypassword'], 'string', 'max' => 32],
            [['mer_address'], 'string', 'max' => 90],
            [['mer_logo', 'mer_license', 'mer_registration', 'mer_ allow', 'mer_positive', 'mer_reverse', 'mer_image1', 'mer_image2', 'mer_image3'], 'string', 'max' => 255]
        ];
    }

    /*
    *添加
    */
    public function addmeans($data){
        $res = new FinMerchantBase;
        $res->mer_name      = $data['FinMerchantBase']['mer_name'];
        $res->mer_contact   = $data['FinMerchantBase']['mer_contact'];
        $res->mer_conphone  = $data['FinMerchantBase']['mer_conphone'];
        $res->mer_position  = $data['FinMerchantBase']['mer_position'];
        $res->mer_address   = $data['FinMerchantBase']['mer_address'];
        $res->ind_type      = $data['FinMerchantBase']['ind_type'];
        $res->mer_introduce = $data['FinMerchantBase']['mer_introduce'];
        $res->save();
        return $res;
    }
    /*
    *查询
    */
    public function selinfo(){
        $arr = $this->find()
            ->select("*")
            ->from("fin_merchant_base")
            ->join("inner join",'fin_user','mer_id=user_id')
            ->asarray()
            ->all();
        return $arr;
    }
  

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mer_id' => 'Mer ID',
            'mer_name' => '企业名称',
            'mer_phone' => '手机号',
            'mer_paypassword' => 'Mer Paypassword',
            'mer_contact' => '联系人',
            'mer_conphone' => '联系电话',
            'mer_position' => '职位',
            'mer_level' => 'Mer Level',
            'mer_province' => '',//省
            'mer_city' => '',//市
            'mer_area' => '',//区 
            'mer_address' => '企业地址',
            'mer_money' => 'Mer Money',
            'mer_limimoney' => 'Mer Limimoney',
            'ind_type' => '行业类型',
            'ind_type_child' => 'Ind Type Child',
            'mer_logo' => 'Mer Logo',
            'mer_license' => 'Mer License',
            'mer_registration' => 'Mer Registration',
            'mer_ allow' => 'Mer  Allow',
            'mer_positive' => '',//上传身份证
            'mer_reverse' => 'Mer Reverse',
            'mer_image1' => 'Mer Image1',
            'mer_image2' => 'Mer Image2',
            'mer_image3' => 'Mer Image3',
            'mer_start' => 'Mer Start',
            'mer_end' => 'Mer End',
            'mer_isshow' => '是否前台展示',
            'mer_introduce' => '公司介绍',
            'register_time' => 'Register Time',
        ];
    }
}
