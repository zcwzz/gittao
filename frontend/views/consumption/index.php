<?php

/* 
	我的消费
 */

$this->title = '我的消费';
?>

<div class="t_min t_tit">当前位置：<a href="#">首页</a> > 我的消费</div>
<!--我的消费-->
<div class="t_min">
<div class="mt_le t_le">
<h1>我的门店</h1>
<ul>
<li><a href="#" class="co">我的订单</a></li>
<li><a href="#">我的兼职</a></li>
<li><a href="#">我的评论</a></li>
<h2>个人设置</h2>
<li><a href="#">基本资料</a></li>
<li><a href="#">账户安全</a></li>
<li> <a href="#">账户余额</a></li>
</ul>
</div>
<div class="mt_ri t_ri"> 
<div class="mt_rli">
<div class="studentdetailtop bor0">
			<span id="" class="colorff5400">
				账户信息
			</span>
			<p class="dis floatright">申请成为消费商家</p>
		</div>
		
		<div class="backf6f3ee  marleft10 bor1 martop20 height120">
			<span class="fonw dis pad10">兼职账户</span>
			<div>
			<p class="dis pad10 marleft30">兼职账户余额：1235元</p>
			<p class="dis marleft250 back pad10 textcenter white wid70">账户充值</p>
				<p class="dis marleft250 back pad10 textcenter white wid70">发布兼职</p>
			</div>
		</div>
		<div class="backf6f3ee  marleft10 bor1 martop20 height120">
			<span class="fonw dis pad10">兼职信息</span>
			<p >
				<span class="dis textint3">待审核兼职：3</span>
				<span class="dis textint10">待结算兼职：2</span>

			</p>
					</div>
					<div class="studentdetailtop bor0 martop30">
			<span id="" class="colorff5400">
				我的兼职
			</span>
			</div>
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
				<?php if(!$goodsorderlist){
					echo "<td>暂时没有订单</td>";
				}else{ 
					foreach ($goodsorderlist as $ord){?> 
					<tr> 
						<td><?php echo $ord['order_id']?></td> 
						<td><?php echo $ord['order_sn']?></td> 
						<td><?php echo $ord['order_addtime']?></td> 
						<td><?php echo $ord['user_name']?></td> 
						<td><?php echo $ord['order_amount']?></td> 
						<td><?php echo $ord['order_price']?></td> 
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
				<?php }?>
				
				
			</table> 
			
</div>
</div>
<div class="clear"></div>
</div>