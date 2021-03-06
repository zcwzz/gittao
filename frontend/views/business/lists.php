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
         <?php echo $this->render('_hader');?>
        </div>
       <?php echo $this->render('_sjleftnav');?>
	  
        <div class="mt_ri t_ri">

        <div class="mt_rli">
            <div class="right">
                <div class="top">
                    <span>兼职列表</span>
                </div>
                <table class="date" cellpadding="0" cellspacing="0">
                    <thead style="background: #E5E5E4;">
                        <tr>
                        <th>序号</th>
                        <th>兼职名称 </th>
                        <th>行业类型 </th>
                        <th>工作时间</th>
                        <th>工资待遇</th>
                        <th>报名人数</th>
                        <th>通过人数 </th>
                        <th>状态 </th>
                        <th>操作 </th>
                        </tr>
                    </thead>
                    <tbody id="parttimedate">
					<?php foreach($job as $v){ ?>
						<tr>
							<td><?php echo $v['job_id'] ?></td>
							<td><?php echo $v['job_name'] ?></td>
							<td><?php echo $v['part_name'] ?></td>
							<td><?php echo $v['job_id'] ?></td>
							<td><?php echo $v['job_money'] ?><?php echo $v['job_treatment'] ?></td>
							<td><?php echo $v['count'] ?></td>
							<td><?php echo $v['counts'] ?></td>
							<td><?php 
							if($v['status']!=$v['job_people']){
								if($v['job_people']>$v['counts']){
									echo '报名审核';
								}else if($v['job_people']==$v['counts']){
									echo '进行中';
								}
							}else{
								echo "已结算";
							}
							?></td>
							<td><?php
							$id=$v['job_id'];
							if($v['status']!=$v['job_people']){
								if($v['job_people']>$v['counts']){
									echo "<a href='examine?id=$id'>审核</a>";
								}else if($v['job_people']==$v['counts']){
									echo "<a href='stulists?id=$id'>结算</a>";
								}
							}else{
								echo "已结算";
							}
							?></td>
						</tr>
					<?php } ?>
					</tbody>
                </table>
                <script type="text/template" id="parttimedateTemplate">
                   
                        </script>
                <div id="kkpager"><?= LinkPager::widget([
	'pagination' => $pagination,
	'prevPageLabel'=>'上一页',
	'nextPageLabel'=>'下一页',
	]) ?></div>
            </div>
        </div>
    </div>
</div>

<div class="qpzz" id="qpzz" style="display:none">
   <div class="tip_box height700">
    <h3><span class="" id="">兼职详情</span></h3>
    <img src="/public/images/u162.png" class="u119 close">
     <div class="con_t padtop0" id="studentInfoContent">
     
	</div> 	

 <script type="text/template" id="studenInfoTemplate">
        <div class="shoppttimejbdetailtext" >
			<label><m class="letterspacing2">职</m>位</label><span id="">{name}</span>
		</div>
		<div class="shoppttimejbdetailtext bgcolore4e5e4">
			<label><m class="letterspacing2">类</m>型</label><span id="">{workTypeName}</span>
		</div>
		<div class="shoppttimejbdetailtext">
			<label>商家名称</label><span id="">{enterpriseName}</span>
		</div>
		<div class="shoppttimejbdetailtext bgcolore4e5e4">
			<label><m class="letterspacing2">地</m>址</label><span id="">{address}</span>
		</div>

		<div class="shoppttimejbdetailtext">
		<label>工作日期</label><span id="">{workBegin}至{workEnd}</span>
		</div>
	<div class="shoppttimejbdetailtext bgcolore4e5e4">
			
	<label>工作时段</label><span id="">{workTimeHourBegin}至{workTimeHourEnd}</span>
		</div>

		<div class="shoppttimejbdetailtext ">
			<label>招聘人数</label><span id="">{total}人</span>
		</div>
		<div class="shoppttimejbdetailtext bgcolore4e5e4">
			<label>报名人数</label><span id="">{applyCount}人</span>
		</div>
		<div class="shoppttimejbdetailtext ">
			<label>通过人数</label><span class="color1ea43d">{deductType}人</span>
		</div>
		<div class="shoppttimejbdetailtext bgcolore4e5e4">
			<label><m class="letterspacing2">薪</m>资</label><span class="colore61c18">{salary}{salaryTypeName}</span>
		</div>
		<div class="shoppttimejbdetailtext ">
			<label>结算方式</label><span id="">{settlementType}</span>
		</div>
		<div class="shoppttimejbdetailtext bgcolore4e5e4">
			<label><m class="letterspacing2">提</m>成</label><span class="color1ea43d">{isDeduct}</span>
		</div>
		<div class="shoppttimejbdetailtext ">
			<label><m class="letterspacing05">联系</m>人</label><span id="">{contact}</span>
		</div>
		<div class="shoppttimejbdetailtext bgcolore4e5e4">
			<label>联系方式</label><span id="">{contactTel}</span>
		</div>
		<div class="shoppttimejbdetailtext ">
			<label><m class="letterspacing2">状</m>态</label><span id="">{status}</span>
		</div>
		<input type="button" value="删除" class="martop30 wid100 bord" id="btnDelte" onclick="GLOBAL.pagebase.delteJobInfo({jobId})" />
	</script>
     	
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