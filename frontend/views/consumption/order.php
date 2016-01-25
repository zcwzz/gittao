 <?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
 /*
	我的订单asdasdasd市房管局四规范和时间
 */
 $this->title = '商家订单';
?>
    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的门店</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <?php echo $this->render('_sjleftnav');?>
        <div class="mt_ri t_ri">
            <div class="mt_rli">
                <div class="right">
                    <div class="tittle">
                        <span>我的订单</span>
                    </div>
                    <div class="budget" id="bussinfo">
						根据：
                        <select id='key'>
							<option value='1'>最近三个月</option>
							<option value='2'>用户</option>
							<option value='3'>订单</option>
						</select>
						
						<input type='text' id='keyword'>
                        <input value="搜索" id="search_all" style="background: #000000; position: relative; left: 200px; color: #fff; width: 100px; height: 30px;border:0" type="button"> 
                    </div>
					<br>
					<div id='lists'>
                    <table class="date" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr style="background: #E5E5E4; height: 50px;">
                                <th class="left">序号</th>
                                <th class="left">订单号</th>
                                <th class="left">交易时间</th>
                                <th class="left">用户</th>
                                <th class="left">消费总额</th>
                                <th class="left">优惠金额</th> 
                                <th class="left">状态</th> 
                            </tr>
							
                        </thead>
						<?php foreach ($goodsorderlist as $ord){?> 
							<tr> 
								<td><?php echo $ord['order_id']?></td> 
								<td><?php echo $ord['order_sn']?></td> 
								<td><?php echo date("Y-m-d H:i:s",$ord['order_addtime'])?></td> 
								<td><?php echo $ord['user_name']?></td> 
								<td><?php echo $ord['order_amount']?></td> 
								<td><?php echo $ord['order_price']?>元</td> 
								<td>
									<?php if($ord['order_status'] == 0){
										echo "未支付";
									}else if($ord['order_status'] == 1){
										echo "已付款";
									}else if($ord['order_status'] == 2){
										echo "失败";
									}else if($ord['order_status'] == 3){
										echo "退款";
									}else if($ord['order_status'] == 4){
										echo "已完成";
									}
									?>
								</td>  
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
    </div>
 </div>
<script>
	$(function (){
		$("#search_all").click(function (){
			var key = $("#key").val();
			var keyword = $("#keyword").val(); 
			$.ajax({
			   type: "POST",
			   url: "index.php?r=consumption/search_order",
			   data: "key="+key+"&keyword="+keyword,
			   success: function(msg){
				   //alert(msg);
				   $("#lists").html(msg);
			   }
			});
		})
	})
    $(".pagination li").last().find("a").addClass("current");
    $(".pagination").find("li span").addClass("disabled");
    $(".pagination").find("li a").addClass("disabled");
</script>

 
 
