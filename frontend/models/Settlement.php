<?php
namespace frontend\models;
use Yii;
use \yii\db\ActiveRecord;
use yii\data\Pagination;

class Settlement extends \yii\db\ActiveRecord{
	public static function tableName(){
		return '{{%fin_settlement}}';
	}

	public function select($id){
			$sql="update fin_settlement set part_status=1 where part_id=$id";
			$da=Yii::$app->db->createCommand($sql)->execute();
	}
	
	
	
	
}