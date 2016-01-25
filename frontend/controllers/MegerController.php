<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
//引用model
use app\models\FinMerchantBase;
use app\models\FinRegion;


class MegerController extends Controller{
	/*
	 * 我的企业兼职+消费企业首页
	 */
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
    public function actionLimit(){
    	return $this->render("limit");
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
		$model =new FinMerchantBase;
		$sele = new FinRegion;
		$res = $sele->selemean();//动态读取的城市
		// $sele = $model->selemean();
		// print_r($sele);
		return $this->render("means",[
			'model'=>$model,
			'res' =>$res
			]);
	}
	/*
	*基本资料入库
	*/
	public function actionSelmeans(){
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

}
