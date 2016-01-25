<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
/*
	我的消费明细
 */
$this->title = '商家消费明细';
?>

<script src="/public/js/globl.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jsbase.js"></script>
<script type="text/javascript" src="/public/js/url.js"></script>
<script type="text/javascript" src="/public/js/dataHandle.js"></script>
<link rel="stylesheet" href="/public/css/jquery.css" type="text/css">
<script type="text/javascript" src="/public/js/jquery.js"></script>



 
    <link rel="stylesheet" href="/public/css/shop.css">
    <link rel="stylesheet" href="/public/css/sty.css">
    <link rel="stylesheet" href="/public/css/comm.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  

    <script type="text/javascript" src="/public/js/pagebase.js"></script> 
     


    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的门店</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">
            <div class="mt_rt" id="topmenus">
                <ul>
                    <li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li>
                    <li class="wi1">   <h1>strong</h1>   <p>手机号：13782519376</p></li>
                    <li class="wi2">预收余额：0.00</li>
                    <li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    <!--    <div class="mt_le t_le" id="leftmenus">
            <a href="" atr="home"><h1>商家中心</h1></a>
            <ul>
                <h2>我的订单</h2><!-- class="co"       现在是哪个页面就放哪个页面的a标签里
                <li><a href="<?/*= Url::to(['consumption/order']); */?>" atr="order">我的订单</a></li>
                <li><a class="co" href="<?/*= Url::to(['consumption/index']); */?>" atr="comment">预收明细</a></li>
                <h2>我的兼职</h2>
                <li><a href="<?/*= Url::to(['business/index']); */?>" atr="publish">发布兼职</a></li>
                <li><a href="<?/*= Url::to(['business/lists']); */?>" atr="list">兼职列表</a></li>
                <h2>企业设置</h2>
                <li><a href="<?/*= Url::to(['meger/means']); */?>" atr="base">基本资料</a></li>
                <li><a href="<?/*= Url::to(['meger/safety']); */?>" atr="safe">账户安全</a></li>
                <li><a href="<?/*= Url::to(['meger/balance']); */?>" atr="account">账户余额</a></li>
            </ul>
        </div>-->
        <?php echo $this->render('_sjleftnav');?>

        <div class="mt_ri t_ri">
      
            <div class="mt_rli">
                <div class="right">
                    <div class="tittle">
                        <span>账户余额</span>
                    </div>
                    <div class="budget" id="bussinfo">
                        <span>账户余额：<e id="advancelimit"><?php echo $balance['mer_money'];?></e></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>预收限额：<i id="astrictlimit">1000元</i></span>
                        <a href=""><input value="限额申请" style="background: #F39700; position: relative; left: 500px; color: #fff; width: 100px; height: 30px;border:0" type="button"></a>

                    </div>
                    <div class="mingxi">
                        <span>预收明细</span>
                    </div>
                
                    <div class="red"></div>
                    <table class="date" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr style="background: #E5E5E4; height: 50px;">
                                <th class="left">交易时间</th>
                                <th class="left">类型</th>
                                <th class="left">交易金额</th>
                                <th class="left">支付方式</th>
                                <th class="left">备注</th>

                            </tr>
							
                        </thead>
						<?php foreach ($payment as $ord){?>
							<tr> 
								<td><?php echo date("Y-m-d H:i:s",$ord['payment_addtime'])?></td>
								<td><?php if($ord['payment_type'] == 1){
                                        echo "支出";
                                    }else{
                                        echo "收入";
                                    }?></td>
								<td><?php echo $ord['payment_money']?></td>
								<td><?php if($ord['payment_way'] == 1){
                                        echo "趣币";
                                    }else{
                                        echo "支付宝";
                                    }?></td>
								<td><?php echo $ord['payment_note']?></td>
							</tr>
						<?php }?>
                    </table>
                    <div class="tcdPageCode t_min">
                        <?php echo LinkPager::widget([
                            'pagination' => $pagination,
                            'prevPageLabel'=>'上一页',
                            'nextPageLabel'=>'下一页',
                        ]);?>
                    </div>
                </div> 
            </div>
        </div>
        </div>
    <style type="text/css">
		p{cursor:pointer}
	</style>
