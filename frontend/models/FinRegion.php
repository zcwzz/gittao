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
    *查询
    */
    public function selemean(){
        $res = FinRegion::find()->all();
        return $res;
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
