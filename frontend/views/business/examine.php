<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<html><head><script src="/public/js/jquery-1.js" type="text/javascript"></script>
<script src="/public/js/globl.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jsbase.js"></script>
<script type="text/javascript" src="/public/js/url.js"></script>
<script type="text/javascript" src="/public/js/dataHandle.js"></script>
<link rel="stylesheet" href="/public/js/jquery.css" type="text/css">
<script type="text/javascript" src="/public/js/jquery_002.js"></script>




  <!--[if lt IE 9]>
    <script src="../Scripts/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/public/css/common.css">
    <link rel="stylesheet" type="text/css" href="/public/css/kkpager_orange.css">
    <link rel="stylesheet" href="/public/css/shop.css">
    <link rel="stylesheet" href="/public/css/sty.css">
    <link rel="stylesheet" href="/public/css/comm.css">
     <link rel="stylesheet" href="/public/css/new.css">
     <link rel="stylesheet" type="text/css" href="/public/css/shopparttimejobdetail.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    

    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的门店</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">
            <div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>231111请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
        </div>
       <?php echo $this->render('_sjleftnav');?>
        <div class="mt_ri t_ri">

        <div class="mt_rli">
            <div class="right">
      <a href="index.php?r=business/examine">兼职详情</a>&nbsp;&nbsp;&nbsp;<a href="index.php?r=business/bao">报名人员</a>&nbsp;&nbsp;&nbsp;<a href="index.php?r=business/tong">通过人员</a>&nbsp;&nbsp;&nbsp;<a href="index.php?r=business/ju">拒绝人员</a><hr/>
<table>
<?php foreach($job as $k=>$v){ ?>
	<tr>
		<td>职位：</td>
		<td><?php echo $v['job_name'] ?></td>
	</tr>
	<tr>
		<td>类型：</td>
		<td><?php echo $v['job_type'] ?></td>
	</tr>
	<tr>
		<td>商家名称：</td>
		<td><?php echo $v['mer_name'] ?></td>
	</tr>
	<tr>
		<td>地址：</td>
		<td><?php echo $v['working_place'] ?></td>
	</tr>
	<tr>
		<td>招收人数：</td>
		<td><?php echo $v['job_people'] ?></td>
	</tr>
	<tr>
		<td>保密人数：</td>
		<td><?php echo $v['count'] ?></td>
	</tr>
	<tr>
		<td>通过人数：</td>
		<td><?php echo $v['counts'] ?></td>
	</tr>
	<tr>
		<td>薪资：</td>
		<td><?php echo $v['job_money'] ?></td>
	</tr>
	<tr>
		<td>结算方式：</td>
		<td><?php echo $v['job_treatment'] ?></td>
	</tr>
	<tr>
		<td>提成：</td>
		<td><?php 
		if($v['commission']==1){
			echo "有";
		}else{
			echo "无";
		} 
		
		?></td>
	</tr>
	<tr>
		<td>联系人：</td>
		<td><?php echo $v['contact'] ?></td>
	</tr>
	<tr>
		<td>联系方式：</td>
		<td><?php echo $v['contact_phone'] ?></td>
	</tr>
	<tr>
		<td>状态：</td>
		<td><?php
		if($v['job_status']==1){
			echo "通过";
		}else if($v['job_status']==3){
			echo "未通过";
		}else{
			echo '未审核';
		}
		
		?></td>
	</tr>
	<?php } ?>
</table>
        </div>
    </div>
</div>


</div>
    <script type="text/javascript" src="/public/js/jsbox.js"></script>
    <script type="text/javascript" src="/public/js/jquery.js"></script>
    <script type="text/javascript" src="/public/js/kkpager.js"></script>
    <script type="text/javascript" src="/public/js/pagebase.js"></script>
    <script type="text/javascript" src="/public/js/merchantParttimeList.js"></script>

    <script type="text/javascript">
        $(function () {
        	  GLOBAL.pagebase.GetTop();
              GLOBAL.pagebase.City();
            GLOBAL.pagebase.loadingPage('', 1);
        });
    
    </script>
     
<style type="text/css">
		p{cursor:pointer}
		
	</style>

	



</body></html>