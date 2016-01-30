<?php
namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
//引用model
use frontend\models\FinMerchantBase;
use frontend\models\FinRegion;
use frontend\models\FinUser;
use frontend\models\FinShopLimitApply;
header("content-type:text/html;charset=utf8");
/*
*商家 韩利会
*/
class MegerController extends Controller{
	/*
	 * 我的企业兼职+消费企业首页
	*/
	public $enableCsrfValidation = false;
    public function actionIndex(){
        return $this->render('index');
    }
    /*
    *我的企业+兼职评论
    */
    public function actionComment(){
    	return $this->render("comment");
    }
    /*
    *我的企业+限额申请
    */
    public function actionQuota(){
    	$model = new FinShopLimitApply;
    	return $this->render("limit",['model'=>$model]);
    }
    /*
    *提交申请入库
    */
    public function actionApply(){
    	$model = new FinShopLimitApply;
    	$data = yii::$app->request->post();
    	$arr = $model->applyadd($data);
    	print_r($arr);

    }
    /*
    *账户安全
    */
    public function actionSafety(){
    	return $this->render("safety");
    }

    /*
	*账户余额
	*/
	public function actionBalance(){
		return $this->render("balance");
	}
	/*
	*基本资料
	*/
	public function actionMeans(){
		//实例化model
		$session = Yii::$app->session;
		$mer_id = $session->get('mer_id');
		//$user_id = "韩涵";
		$mer_id = '1';
		//获取登陆用户id
		$userinfo = FinMerchantBase::find()->where(['mer_id'=>$mer_id])->one();
		//查询登陆用户的信息
		$info = FinMerchantBase::find()->where(['mer_id'=>$mer_id])->asarray()->one();	
		//查询登陆用户的信息
		$model =new FinMerchantBase;
		$sele = new FinRegion;
		$province = $sele->selemean();//省
		//省
		if(empty($province)){
			$provinces[0]['region_id'] = "0";
			$provinces[0]['region_name']="请选择";
		}else{
			foreach ($province as $k => $v) {
				$provinces[$k]['region_id'] = $v['region_id'];
				$provinces[$k]['region_name'] = $v['region_name'];
			}
		}
		$areas = array();
		$citys = array();
		return $this->render("means",[
			'model'=>$model,
			'province' =>$province,
			'city'=>$citys,
			'area'=>$areas
			]);
	}
	/*
	*查询
	*/
	public function actionSeleoption(){
		$region_id = Yii::$app->request->get('region_id');
		if($region_id){
			$into = FinRegion::find()->where("parent_id=".$region_id)->asarray()->all();
			echo json_encode($into);die;
		}
	}
	/*
	*基本资料入库
	*/
	public function actionSelmeans(){
		print_r($_POST);die;
		$model = new FinMerchantBase;
		$data = yii::$app->request->post();
		$res = $model->addmeans($data);
		if($res){
			echo "添加成功";
			return $this->render("means");
		}else{
			echo "添加失败！";
		}
	}
	/*
	*修改密码
	*/
	public function actionPassword(){
		$xg = yii::$app->request->get();
		if(empty($xg)){
			$xg['detail'] = "detail1";
		}
		$model = new FinUser;
		return $this->render("password",['model'=>$model,'detail'=>$xg]);
	}
	/*
	*修改密码
	*/
	public function actionUpdpwd(){
		$session = Yii::$app->session;
		$user_id = $session->get('user_id');
		$data = yii::$app->request->post();
	
		$user_pwd = md5($data['FinUser']['user_pwd']);
		$new_pwd  = md5($data['FinUser']['user_password']);
		$arr=FinUser::find()->where("user_id=".$user_id)->asarray()->one();
		if($arr){
			if($arr['user_password']==$user_pwd){
				$model = new FinUser;
				$res = $model->Userupdpwd($user_id,$new_pwd);
				echo "<script>alert('修改密码成功！');location.href='password'</script>";

			}else{
				echo "<script>alert('密码输入有误');location.href='password'</script>";
				die;
			}
		}else{
			echo "<script>alert('有户名不存在');location.href='password'</script>";
		}
	}
}
