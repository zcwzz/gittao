<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
/*
	我的消费明细
 */
$this->title = '商家消费明细';
?>


    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的门店</div>
    <!--我的趣淘学-->
<div class="t_min">
    <?php echo $this->render('_sjleftnav');?>
    <div class="mt_ri t_ri">
        <div class="mt_rli">
                    <div class="studentdetailtop bor0">
                        <span id="" class="colorff5400"> 账户余额 </span>
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
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                </div> 
            </div>
        </div>
    </div>