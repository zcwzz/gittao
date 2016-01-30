<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fin_helpcontent".
 *
 * @property integer $helpcontent_id
 * @property integer $helptitle_id
 * @property string $helpcontent
 * @property integer $addtime
 * @property integer $updtime
 */
class Helpcontent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fin_helpcontent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['helptitle_id', 'helpcontent', 'addtime', 'updtime'], 'required'],
            [['helptitle_id', 'addtime', 'updtime'], 'integer'],
            [['helpcontent'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'helpcontent_id' => 'Helpcontent ID',
            'helptitle_id' => 'Helptitle ID',
            'helpcontent' => 'Helpcontent',
            'addtime' => 'Addtime',
            'updtime' => 'Updtime',
        ];
    }
   /* public function helpcontent($id){
        $data['content'] = $this->find()
            ->select("*")
            ->from("fin_helpcontent")
            ->where(["helptitle_id"=>$id])
            ->asArray()
            ->all();
        return $data;
    }*/

}
