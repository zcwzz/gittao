<?php
namespace frontend\models;
use Yii;
use \yii\db\ActiveRecord;
use yii\data\Pagination;

class Partlist extends \yii\db\ActiveRecord{
	public static function tableName(){
		return '{{%fin_part_list}}';
	}
	public function select($id){
		
		$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $this->find()
				->select('*')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status=1'])
				->count(),
        ]);

				$rows = $this->find()
				->select('stu_name,stu_sex,user_phone,stu_school,stu_professional,fin_user.user_id,job_id,fin_settlement.part_status')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status=1'])
				->offset($pagination->offset)
				->asarray()->limit($pagination->limit)->all();
		
		$data['pagination']=$pagination;
		$data['stu']=$rows;
		return $data;
		
	}

	public function sele($id){
		
		$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $this->find()
				->select('*')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(["job_id"=>$id])
				->count(),
        ]);

				$rows = $this->find()
				->select('stu_name,stu_sex,stu_height,stu_school,stu_professional,fin_user.user_id,job_id,fin_part_list.part_status')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(["job_id"=>$id])
				->offset($pagination->offset)
				->asarray()->limit($pagination->limit)->all();
		
		$data['pagination']=$pagination;
		$data['stu']=$rows;
		return $data;
		
	}

	public function sel($id){
		
		$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $this->find()
				->select('*')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status=1'])
				->count(),
        ]);

				$rows = $this->find()
				->select('stu_name,stu_sex,stu_height,stu_school,stu_professional,fin_user.user_id,job_id,fin_part_list.part_status')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status=1'])
				->offset($pagination->offset)
				->asarray()->limit($pagination->limit)->all();
		
		$data['pagination']=$pagination;
		$data['stu']=$rows;
		return $data;
		
	}
	public function se($id){
		
		$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $this->find()
				->select('*')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status!=1'])
				->count(),
        ]);

				$rows = $this->find()
				->select('stu_name,stu_sex,stu_height,stu_school,stu_professional,fin_user.user_id,job_id,fin_part_list.part_status')
				->from('fin_part_list')
				->join('inner join','fin_user','fin_part_list.user_id=fin_user.user_id')
				->join('inner join','fin_students','fin_part_list.user_id=fin_students.stu_id')
				->join('inner join','fin_settlement','fin_user.user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status!=1'])
				->offset($pagination->offset)
				->asarray()->limit($pagination->limit)->all();
		
		$data['pagination']=$pagination;
		$data['stu']=$rows;
		return $data;
		
	}
	public function delques($qid,$aid){
	
		$sql="update fin_part_list set part_status=1 where user_id in ($qid) and job_id=$aid";
		$data=Yii::$app->db->createCommand($sql)->execute();
		return $data;
	}
	
	
	
}