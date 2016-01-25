<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Cookie;
use frontend\models\FinUser;
use app\models\FinMerchantBase;
use frontend\models\Login;
header('content-type:text/html;charset=utf8');
/**
 * 用户
 */
class UserController extends Controller
{
	//验证码
	public function actions()
	{
		return [
			 'captcha' => [
				  'class' => 'yii\captcha\CaptchaAction',
				  'maxLength' => 4,
				  'minLength' => 5
			 ],
		 ];
	}
    public function actionIndex()
    {
        return $this->render('index');
    }
	//学生注册页面
	public function actionRegister()
	{
		$model=new FinUser;

		return $this->render('register',['model'=>$model]);
	}
	//企业注册页面
	public function actionEnterprise()
	{
		$model=new FinUser;

		return $this->render('enterprise',['model'=>$model]);
	}
	//学生提交注册
	public function actionGetpost()
	{
		//$db=\Yii::$app->db;
		$data=Yii::$app->request;
		$dat=$data->post();
		//print_r($dat);die;
		$model= new FinUser;
		$res    =  FinUser::find()->where('user_phone="'.$dat['FinUser']['user_phone'].'"')->asArray()->one();
		if($res)
		{
			echo "<script>alert('电话号码重复');location.href='index.php?r=user/register'</script>";
			die;
		}
		if(md5($dat['FinUser']['user_password'])!=md5($dat['FinUser']['isPassword']))
		{
			echo "<script>alert('两次密码不一致');location.href='index.php?r=user/register'</script>";
			die; 
		}
		$model->user_id = 0;
		$model->user_phone = $dat['FinUser']['user_phone'];
		$model->user_password = md5($dat['FinUser']['user_password']);
		$model->user_lastip = $data->userIp;
		$model->user_addtime = time();
		$model->user_lastlogin = time();
		$model->user_type = $dat['user_type'];
		$model->user_status = 1;
		//print_r($datas);die;
		$bb=$model->save(false);
		if($bb)
		{
			//获取最后一次插入的id
			$id=\Yii::$app->db->getLastInsertID();
			$session = \Yii::$app->session;
			$session->open();
			$session->set('user_id',$id);
			echo $session->get('user_id');
			//跳转到学生的详情信息页面
			echo "注册成功，讲跳转到个人信息页面";
		}else
		{
			echo "<script>alert('注册失败！！请稍后再试');location.href='index.php?r=user/register'</script>";
			die;
		}
		
	}
	//企业提交compgetpost
	function actionCompgetpost()
	{
		$data=\Yii::$app->request;
		$dat=$data->post();
		//print_r($dat);die;
		$model= new FinUser;
		$FinMerchantBase=new FinMerchantBase;
		$res    =  FinUser::find()->where('user_phone="'.$dat['FinUser']['user_phone'].'"')->asArray()->one();
		if($res)
		{
			echo "<script>alert('电话号码重复');location.href='index.php?r=user/register'</script>";
			die;
		}
		if(md5($dat['FinUser']['user_password'])!=md5($dat['FinUser']['isPassword']))
		{
			echo "<script>alert('两次密码不一致');location.href='index.php?r=user/register'</script>";
			die; 
		}
		if(count($dat['FinUser']['businessType'])>=2)
		{
			$businessType=4;
		}else
		{
			$businessType=$dat['FinUser']['businessType'][0];
		}
		//echo $businessType; die;
		$model->user_id = 0;
		$model->user_phone = $dat['FinUser']['user_phone'];
		$model->user_password = md5($dat['FinUser']['user_password']);
		$model->user_lastip = $data->userIp;
		$model->user_addtime = time();
		$model->user_lastlogin = time();
		$model->user_type = $businessType;
		$model->user_status = 1;
		//print_r($datas);die;
		$transaction = \Yii::$app->db->beginTransaction();
		try {  
			$model->save(false);
			//获取刚刚插入的id
			$user_id = $model->attributes['user_id'];
			$FinMerchantBase->mer_id=$user_id;
			$FinMerchantBase->mer_name=$dat['FinUser']['merchantname'];
			$FinMerchantBase->save(false);
			$transaction->commit(); //提交事务会真正的执行数据库操作
			//$session = \Yii::$app->session;
			//$session->open();
			//$session->set('user_id',$user_id);
			echo "<script>alert('注册成功！！请稍后再试');location.href='index.php?r=user/login'</script>";
				die;
		} catch (Exception $e) {
			$transaction->rollback(); //如果操作失败, 数据回滚
			echo "<script>alert('注册失败！！请稍后再试');location.href='index.php?r=user/enterprise'</script>";
				die;
		}
		
	}
	public function actionLogin()
	{		
		$session = \Yii::$app->session;
		$session->open();
		if($session->get('user_id'))
		{
			echo "<script>alert('你已登录！');location.href='index.php'</script>";die;
		}
		$model=new Login;
		return $this->render('login',['model'=>$model]);
	}
	public function actionLoginpro()
	{
		$request=Yii::$app->request;
		$data=$request->post();
		$model=new FinUser;
		$res    =  FinUser::find()->where('user_phone="'.$data['Login']['user'].'"')->andwhere('user_password="'.md5($data['Login']['Password']).'"')->asArray()->one();
		if($res)
		{
			$session = \Yii::$app->session;
			$session->open();
			$session->set('user_id',$res['user_id']);
			print_r($res);
			echo "登录成功，session为 user_id=".$session->get('user_id');
		}else
		{
			echo "用户名或密码错误！！";
		}

		
	}
	public function actionOutlogin()
	{
		$session = \YII::$app->session;
		$session->open();
		$session->remove('user_id');
		echo "<script>alert('退出成功！');location.href='index.php?r=user/login'</script>";
		die;
	}
	public function actionOnly()
	{
		//print_r($_GET);die;
		$model= new FinUser;
		$res    =  FinUser::find()->where('user_phone="'.$_GET['phone'].'"')->asArray()->one();
		if($res)
		{
			echo 1;
			die;
		}else
		{
			echo 0;
			die;
		}
	}


}
