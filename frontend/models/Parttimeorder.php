<?php
namespace frontend\models;
use Yii;
use \yii\db\ActiveRecord;
use yii\data\Pagination;

class Parttimeorder extends \yii\db\ActiveRecord{
	public static function tableName(){
		return '{{%fin_parttime_order}}';
	}
	public function select(){
		
	
				$pay3 = $this->find()->select('order_id')->from('fin_parttime_order')->orderBy('order_id desc')
				->limit('1')->asarray()->one();	
			
				$order_id=$pay3['order_id'];
				$rows = $this->find()
				->select('stu_name,job_money,job_start,job_end,job_treatment,fin_part_list.user_id')
				->from('fin_parttime_order')
				->join('inner join','fin_job_details','fin_parttime_order.position_id=fin_job_details.job_id')
				->join('inner join','fin_part_list','fin_parttime_order.position_id=fin_part_list.job_id')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_user.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(['and', "fin_parttime_order.order_id=$order_id", 'fin_part_list.part_status=1','fin_settlement.part_status!=1'])
				->asarray()->all();
				/*foreach($rows as $k=>$v){
					$id=$v['user_id']; 
					$sql="update fin_settlement set part_status=1 where part_id=$id";
					$da=Yii::$app->db->createCommand($sql)->execute();
				}*/
			
		$data['set']=$rows;
		return $data;
		
	}

	public function selects($aid){
		
				/*$sql="update fin_settlement set part_status=1 where part_id=$aid";
				$da=Yii::$app->db->createCommand($sql)->execute();
					*/
				$pay3 = $this->find()->select('order_id')->from('fin_parttime_order')->orderBy('order_id desc')
				->limit('1')->asarray()->one();	
			
				$order_id=$pay3['order_id'];
				$rows = $this->find()
				->select('stu_name,job_money,job_start,job_end,job_treatment,fin_part_list.user_id')
				->from('fin_parttime_order')
				->join('inner join','fin_job_details','fin_parttime_order.position_id=fin_job_details.job_id')
				->join('inner join','fin_part_list','fin_parttime_order.position_id=fin_part_list.job_id')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_user.user_id=fin_students.stu_id')
				->where(['and', "fin_parttime_order.order_id=$order_id", "fin_part_list.user_id=$aid"])
				->asarray()->all();
			
			
				
			
		$data['set']=$rows;
		return $data;
		
	}
	
	
	
}