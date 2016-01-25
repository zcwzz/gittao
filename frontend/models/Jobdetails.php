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
            'defaultPageSize' => 4,
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
				->asarray()->limit($pagination->limit)->all();

		$job = $this->find()
				->select('job_id')
				->from('fin_job_details')
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
				->where(['job_id'=>$job_id])
				->where(['part_status'=>1])
				->count();
			$i++;
		}
		
		
	$data['pagination']=$pagination;
		$data['job']=$rows;
		return $data;
		
	}
	
	
	
}