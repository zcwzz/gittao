<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\GoodsOrder;
use frontend\models\Payment;
/**
 * 我的消费
 * strong
 */
class ConsumptionController extends Controller
{
    //消费首页
	public $enableCsrfValidation = false;
    public function actionIndex()
    {
		$GoodsOrder = new GoodsOrder();
        $session=\Yii::$app->session;
        $session->open();
        $user_id=$session->get('user_id');
		$goodsorderlist = $GoodsOrder->goodsorderlist($user_id);
		//print_r($goodsorderlist);die;
		return $this->render("index",['goodsorderlist'=>$goodsorderlist]);
    }
    //消费订单
    public function actionOrder()
    {
		$GoodsOrder = new GoodsOrder();
        $session=\Yii::$app->session;
        $session->open();
		$user_id=$session->get('user_id');
		$where = ['user_id'=>$user_id];
		$goodsorderlist = $GoodsOrder->goods_order_search($where); 
		$pagination = $goodsorderlist['pagination'];
		return $this->render("order",[
            'pagination'=>$pagination,
            'goodsorderlist'=>$goodsorderlist['lists']
        ]);
		//return $this->render("order",['goodsorderlist'=>$goodsorderlist['lists'],'pagination'=>$pagination]);  
    } 
	//搜索订单
	public function actionSearch_order(){ 
		$key = isset($_GET['key'])?$_GET['key']:'';
		$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
		$session=\Yii::$app->session;
        $session->open();
		if(!isset($_GET['page']))
        {
            $session->set('key',$key);
			$session->set('keyword',$keyword); 
        }  
		//print_r($_SESSION);
        $key2=$session->get('key');
        $keyword2=$session->get('keyword');
        //echo $type;
		$m = date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))); //上个月的开始日期
        $t = date('t',strtotime($m)); //上个月共多少天
        $start = strtotime(date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y')))); //上个月的开始日期
        $end = strtotime(date('Y-m-d', mktime(0,0,0,date('m')-1,$t,date('Y')))); //上个月的结束日期
        $where=['and',(1)];
        $session=\Yii::$app->session;
        $session->open();
        $user_id=$session->get('user_id');
        $where[] = ['user_id'=>$user_id];
        if($key2 != ''){
			if($key2 == 1){
				$where[]=array('between','order_addtime',$start,$end);
				$where[]=array('order_sn'=>$keyword2);
			}else if($key2 == 2){
				 $where[]=array('like','user_name',$keyword2);
			}else if($key2 == 3){
				 $where[]=array('order_sn'=>$keyword2);
			}
        }
        //print_r($where);die;
        $GoodsOrder = new GoodsOrder();
        $goods_order_search = $GoodsOrder->goods_order_search($where);
        //print_r($goods_order_search);die;
        $pagination = $goods_order_search['pagination'];
        //print_r($pagination);
        return $this->renderPartial("ajaxpage",[
            'pagination'=>$pagination,
            'goodsorderlist'=>$goods_order_search['lists']
        ]);
	}
    //消费明细
    public function actionPayment(){
		$Payment = new Payment();
        $session=\Yii::$app->session;
        $session->open();
        $user_id=$session->get('user_id');
		$where1 = ['mer_id'=>$user_id];
		$where = ['user_id'=>$user_id];
        $balance = $Payment->balance($where1);
        //print_r($balance);die;
        //明细列表
		$payment = $Payment->payment_list($where);
		return $this->render("payment",[
            'balance'=>$balance['balance'],
            'pagination'=>$payment['pagination'],
            'payment'=>$payment['lists']
        ]); 
    }

}
