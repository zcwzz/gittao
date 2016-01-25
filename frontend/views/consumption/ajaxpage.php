<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
 
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
			<td><?php echo $ord['order_addtime']?></td> 
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