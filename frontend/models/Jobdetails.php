<?php
namespace frontend\models;
use Yii;
use \yii\db\ActiveRecord;
use yii\data\Pagination;

class Jobdetails extends \yii\db\ActiveRecord{
	public static function tableName(){
		return '{{%fin_job_details}}';
	}
	public function selects(){
		$pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $this->find()
				->select('*')
				->from('fin_job_details')
				->join('inner join','fin_part_type','job_type=part_id')
				->count(),
        ]);
	
				$rows = $this->find()
				->select('*')
				->from('fin_job_details')
				->join('inner join','fin_part_type','job_type=part_id')
			
				->offset($pagination->offset)
				->asarray()->orderBy('job_id asc')->limit($pagination->limit)->all();
				

			$a=0;
			foreach($rows as $k=>$v){
				$id=$v['job_id'];
				$rows[$a]['status'] = $this->find()
				->select('*')
				->from('fin_part_list')
				->join('inner join','fin_settlement','user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status=1','fin_settlement.part_status=1'])
				->offset($pagination->offset)
				->limit($pagination->limit)
				->count();
				$rows[$a]['count'] = $this->find()
				->select('*')
				->from('fin_part_list')
				->where(['job_id'=>$id])
				->offset($pagination->offset)
				->limit($pagination->limit)
				->count();
			$rows[$a]['counts'] = $this->find()
				->select('*')
				->from('fin_part_list')
				->where(['and', "job_id=$id", 'part_status=1'])
					->offset($pagination->offset)
				->limit($pagination->limit)
				->count();
	

				$a++;
			}
			
		

	$data['pagination']=$pagination;
		$data['job']=$rows;
		return $data;
		
	}

	//审核
	public function examine($id){
	
				
	
				$rows = $this->find()
				->select('*')
				->from('fin_job_details')
				->join('inner join','fin_part_type','job_type=part_id')
				->join('inner join','fin_merchant_base','merchants_id=mer_id')
				->where(['job_id'=>$id])
				->asarray()->orderBy('job_id asc')->all();
			$a=0;
			foreach($rows as $k=>$v){
				$id=$v['job_id'];
				$rows[$a]['status'] = $this->find()
				->select('*')
				->from('fin_part_list')
				->join('inner join','fin_settlement','user_id=fin_settlement.part_id')
				->where(['and', "job_id=$id", 'fin_part_list.part_status=1','fin_settlement.part_status=1'])
				->count();
				$a++;
			}
			
		$job = $this->find()
				->select('job_id')
				->from('fin_job_details')
				->where(['job_id'=>$id])
				->asarray()->all();	
		$i=0;
		foreach($job as $k=>$v){
			$job_id=$v['job_id'];	
			$rows[$i]['count'] = $this->find()
				->select('*')
				->from('fin_part_list')
				->where(['job_id'=>$job_id])	
				->count();
			$rows[$i]['counts'] = $this->find()
				->select('*')
				->from('fin_part_list')
				->where(['and', "job_id=$job_id", 'part_status=1'])
				->count();	
			$i++;
		}


		$data['job']=$rows;
		return $data;
		
	}
	
	
	
}