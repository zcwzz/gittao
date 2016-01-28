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
                        <th><input type="checkbox"  id="che" onclick="fun()">全选</th>
                        <th>姓名 </th>
                        <th>性别 </th>
                        <th>联系电话</th>
                        <th>学校</th>
                        <th>专业</th>
                        <th>结算 </th>
               
                        </tr>
                    </thead>
                    <tbody id="parttimedate">
					<?php foreach($stu as $v){ ?>
						<tr>
							<td><input type="checkbox" value="{$v.user_id}" class="openid" name="checkname[]"></td>
							<td><?php echo $v['stu_name'] ?></td>
							<td><?php 
							if($v['stu_sex']==1){
								echo '男';
							}else if($v['stu_sex']==2){
								echo '女';
							}else{
								echo '保密';
							}
							
							?></td>
							<td><?php echo $v['user_phone'] ?></td>
							<td><?php echo $v['stu_school'] ?></td>
							<td><?php echo $v['stu_professional'] ?></td>
							<td>
							<?php if($v['part_status']!=1){ ?>
							<a href="set?id=<?php echo $v['job_id'] ?>&aid=<?php echo $v['user_id'] ?>">结算</a></td>
							<?php }else{ ?>
								已结算
							<?php } ?>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<a href="order?id=<?php echo $v['job_id'] ?>"><input type="button" value="批量结算"></a>
				<input type="button" value="批量结束" onclick="">
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

	

<script>
 function fun(){
    if($('#che').prop('checked') == true){ 
        $("input[name='checkname[]']").prop('checked',true)
    }else{ 
        $("input[name='checkname[]']").prop('checked',false)
    } 
 
 };
</script>

</body></html>