<?php
namespace frontend\models;
use Yii;
use \yii\db\ActiveRecord;
use yii\data\Pagination;

class Parttype extends \yii\db\ActiveRecord{
	public static function tableName(){
		return 'fin_part_type';
	}
	public function select(){
				$sql3="select * from fin_part_type ";
				$rows=Yii::$app->db->createCommand($sql3)->queryAll();

				
				return $rows;
		
	}
	
	
}