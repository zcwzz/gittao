<?php
namespace frontend\models;
use Yii;
use \yii\db\ActiveRecord;
use yii\data\Pagination;

class Region extends \yii\db\ActiveRecord{
	public static function tableName(){
		return '{{%fin_region}}';
	}
	public function select(){
		$job = $this->find()
				->select('*')
				->from('fin_region')
				->where(['parent_id'=>1])
				->asarray()->all();	
		return $job;
	}
	public function sele($id){
		$job = $this->find()
				->select('*')
				->from('fin_region')
				->where(['parent_id'=>$id])
				->asarray()->all();	
		return $job;
	}

	
	
	
}