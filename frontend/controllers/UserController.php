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
			$session = \YII::$app->session;
			$session->open();
			$session->set('user_name',$id);
			echo $session->get('user_name');
			//跳转到学生的详情信息页面
			echo "注册成功，讲跳转到个人信息页面";
		}else
		{
			echo "<script>alert('注册失败！！请稍后再试');location.href='index.php?r=user/register'</script>";
			die;
		}
		
	}
	//企业提交
	function actionCompgetpost()
	{
		print_r($_POST);
	}

}
