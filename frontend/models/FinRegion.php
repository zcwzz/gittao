<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_region".
 *
 * @property integer $region_id
 * @property integer $parent_id
 * @property string $region_name
 * @property integer $region_type
 */
class FinRegion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fin_region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'region_name', 'region_type'], 'required'],
            [['parent_id', 'region_type'], 'integer'],
            [['region_name'], 'string', 'max' => 10]
        ];
    }
    /*
    *查询省
    */   
    public function selemean(){
        $model = new FinRegion();
        $arr = $model->find()->select(['region_id','region_name'])->where(["region_type" =>1])->asarray()->all();
        return $arr;
    }
    /*
    *查询城市
    */
    public function getCity($province_id){
         return $this->find()->select(['region_id','region_name'])->where(['parent_id'=>$province_id])->asarray()->all();
    }

    //查询区、县
    public function getArea($city_id){
        return $this->find()->select(['region_id','region_name'])->where(['parent_id'=>$city_id])->asarray()->all();
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'parent_id' => 'Parent ID',
            'region_name' => 'Region Name',
            'region_type' => 'Region Type',
        ];
    }
}
