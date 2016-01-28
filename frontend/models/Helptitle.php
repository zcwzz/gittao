<?php

namespace frontend\models;

use Yii;
use frontend\models\Helpcontent;

/**
 * This is the model class for table "fin_helptitle".
 *
 * @property integer $helptitle_id
 * @property string $helptitle_name
 * @property integer $is_show
 * @property integer $addtime
 * @property integer $helptitle_sort
 * @property integer $helptitle_pid
 */
class Helptitle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fin_helptitle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['helptitle_name', 'is_show', 'addtime', 'helptitle_sort', 'helptitle_pid'], 'required'],
            [['is_show', 'addtime', 'helptitle_sort', 'helptitle_pid'], 'integer'],
            [['helptitle_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'helptitle_id' => 'Helptitle ID',
            'helptitle_name' => 'Helptitle Name',
            'is_show' => 'Is Show',
            'addtime' => 'Addtime',
            'helptitle_sort' => 'Helptitle Sort',
            'helptitle_pid' => 'Helptitle Pid',
        ];
    }
    public function helplist(){
        $data['title'] = $this->find()
            ->select("*")
            ->from("fin_helptitle")
            ->asArray()
            ->all();
        $data['content'] = Helpcontent::find()
            ->select("*")
            ->from("fin_helptitle")
            ->asArray()
            ->all();
        return $data;
    }

}
