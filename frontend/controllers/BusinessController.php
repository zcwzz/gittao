<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Jobdetails;
use frontend\models\Upload;
use frontend\models\Parttype;
use frontend\models\Partlist;
use frontend\models\Parttimeorder;
use frontend\models\Settlement;
use yii\web\UploadedFile;

/**
 * 安全保障
 */
class BusinessController extends Controller
{
		public $enableCsrfValidation = false;
	//发布兼职
    public function actionIndex()
    {
        $model = new Upload();
		 $job = new Jobdetails();
		 $part = new Parttype();
		 $data=$part->select();

        if (Yii::$app->request->isPost) {

			$model->file = UploadedFile::getInstance($model,'file');

			 if ($model->file && $model->validate()) {
				
				$model->file->saveAs('uploads/'. $model->file->baseName . '.' . $model->file->extension);
				$img='uploads/'. $model->file->baseName . '.' . $model->file->extension;
		
				$job -> merchants_id  = 1;
				$job -> job_name  = Yii::$app->request->post('name');
				$job -> job_type  = Yii::$app->request->post('workType');
				$job -> job_people  = Yii::$app->request->post('total');
				$job -> job_img  = $img;
				$job -> job_money  = Yii::$app->request->post('salary');
				$job -> job_treatment  = Yii::$app->request->post('payUnit');
				$job -> pay_method  = Yii::$app->request->post('payStyle');
				$job -> end_data  = Yii::$app->request->post('applyEnd');
				$job -> job_start  = Yii::$app->request->post('workBegin');
				$job -> job_end  = Yii::$app->request->post('workEnd');
				$job -> work_start  = Yii::$app->request->post('workTimeHourBegin');
				$job -> work_end  = Yii::$app->request->post('workTimeHourEnd');
				$job -> commission  = Yii::$app->request->post('isDeduct');
				$job -> cut_way  = 1;
				$job -> sex  = Yii::$app->request->post('sex');
				$job -> height  = Yii::$app->request->post('height');
				$job -> job_content  = Yii::$app->request->post('workInfo');
				$job -> job_require  = Yii::$app->request->post('jobDetails');
				$job -> contact  = Yii::$app->request->post('contact');
				$job -> contact_phone  = Yii::$app->request->post('contactTel');

				$province  = Yii::$app->request->post('province');
				$city  = Yii::$app->request->post('city');
				$area  = Yii::$app->request->post('area');
				$address  = Yii::$app->request->post('address');
				$job -> working_place=$province.'/'.$city.'/'.$area.'/'.$address;
				$job -> add_time  = time();
				$job -> job_status = 0;
				$job -> lng = 1;
				$job -> lat = 1;
				$arr=$job->save();

			}
			
		}

        return $this->render('index', ['model' => $model,'part'=>$data]);
    }
	//兼职列表
	public function actionLists(){
			 $job = new Jobdetails();
			  $data=$job->selects();

		return $this->render('lists',$data);
	}
	//兼职详情
	public function actionStulists($id){
		 $obj = new Partlist();
		 $data=$obj->select($id);
		 return $this->render('stulists',$data);
	}
	//审核
	public function actionExamine(){
	
		if(empty(Yii::$app->request->get('id'))){
			Yii::$app->session->open();
			$id=Yii::$app->session->get('id');
	
		}else{
			$id=Yii::$app->request->get('id');
			Yii::$app->session->open();
			Yii::$app->session->set('id',$id);
		}

		 $job = new Jobdetails();
		 $data=$job->examine($id);
		return $this->render('examine',$data);
	}
	//订单 $user_id登陆用户的id
	public function actionOrder($id){	
		$job = new Parttimeorder();
		$user_id=1;
		$time=time();
		$order_sn=mt_rand(100,999).$time;
		$job -> order_sn=$order_sn;
			
		$job -> position_id= $id;
		$job -> order_addtime=$time;
		$job -> order_status=0;
		$job -> user_id= $user_id;
		$arr=$job->save();
		if($arr){
			$data=$job->select();
			 return $this->render('settlement',$data);
		}else{
			echo '2';
		}
	}
	//单个结算
	public function actionSet($id,$aid){
	
		$job = new Parttimeorder();
		$user_id=1;
		$time=time();
		$order_sn=mt_rand(100,999).$time;
		$job -> order_sn=$order_sn;
			
		$job -> position_id= $id;
		$job -> order_addtime=$time;
		$job -> order_status=0;
		$job -> user_id= $user_id;
		$arr=$job->save();
		if($arr){
			$data=$job->selects($aid);
			 return $this->render('settlement',$data);
		}else{
			echo '2';
		}
	}
	//报名人员
	public function actionBao(){
		if(empty(Yii::$app->request->get('id'))){
			Yii::$app->session->open();
			$id=Yii::$app->session->get('id');
	
		}else{
			$id=Yii::$app->request->get('id');
			Yii::$app->session->open();
			Yii::$app->session->set('id',$id);
		}
		 $obj = new Partlist();
		 $data=$obj->sele($id);
	
		 return $this->render('exam',$data);
	}
	//通过人员
	public function actionTong(){
		if(empty(Yii::$app->request->get('id'))){
			Yii::$app->session->open();
			$id=Yii::$app->session->get('id');
	
		}else{
			$id=Yii::$app->request->get('id');
			Yii::$app->session->open();
			Yii::$app->session->set('id',$id);
		}
		 $obj = new Partlist();
		 $data=$obj->sel($id);
	
		 return $this->render('exam',$data);
	}
	//拒绝人员
	public function actionJu(){
		if(empty(Yii::$app->request->get('id'))){
			Yii::$app->session->open();
			$id=Yii::$app->session->get('id');
	
		}else{
			$id=Yii::$app->request->get('id');
			Yii::$app->session->open();
			Yii::$app->session->set('id',$id);
		}
		 $obj = new Partlist();
		 $data=$obj->se($id);
	
		 return $this->render('exam',$data);
	}
	//审核通过
	public function actionQuetong(){
		Yii::$app->session->open();
		$aid=Yii::$app->session->get('id');

		$request = \YII::$app->request;
		$id = $request->post('id');
		$qid = rtrim($id, ','); 

		/*$arr = explode(",",$id);
		array_pop($arr); 
		print_r($arr);*/
		$m=new Partlist;
		$result=$m->delques($qid,$aid);

		if($result){
			echo 1;
		}
		//var_dump($result);
	}


}
