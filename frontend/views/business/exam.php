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
      <a href="examine">兼职详情</a>&nbsp;&nbsp;&nbsp;<a href="bao">报名人员</a>&nbsp;&nbsp;&nbsp;<a href="tong">通过人员</a>&nbsp;&nbsp;&nbsp;<a href="ju">拒绝人员</a><hr/>
 <table class="date" cellpadding="0" cellspacing="0">
                    <thead style="background: #E5E5E4;">
                        <tr>
                        <th><input type="checkbox"  id="che" onclick="fun()">全选</th>
                        <th>姓名 </th>
                        <th>性别 </th>
                        <th>身高</th>
                        <th>学校</th>
						<th>是否通过</th>
                        <th>操作 </th>
               
                        </tr>
                    </thead>
                    <tbody id="parttimedate">
					<?php foreach($stu as $v){ ?>
						<tr>
							<td><input type="checkbox" value="<?php echo $v['user_id'] ?>" class="openid" name="checkname[]"></td>
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
							<td><?php echo $v['stu_height'] ?></td>
							<td><?php echo $v['stu_school'] ?></td>
							<td><?php if($v['part_status']==1){
								echo "通过";
							}else{
								echo "未通过";
							} ?></td>
							<td>查看</td>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<input type="button" id="tong" value="批量通过">
        </div>
		 <div id="kkpager"><?= LinkPager::widget([
	'pagination' => $pagination,
	'prevPageLabel'=>'上一页',
	'nextPageLabel'=>'下一页',
	]) ?></div>
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
		 function fun(){
    if($('#che').prop('checked') == true){ 
        $("input[name='checkname[]']").prop('checked',true)
    }else{ 
        $("input[name='checkname[]']").prop('checked',false)
    } 
 
 };
    
    </script>
     
<style type="text/css">
		p{cursor:pointer}
		
	</style>

	


<script>

  $("#tong").click(function(){
    var i = document.getElementsByName('checkname[]');
    //var c = i.length;
    var str = '';
    /*for (var b=0;b<=c;b++) {
      str+=i[b].value+',';
    };*/
    for(c in i){
      if(i[c].checked==true){
        str+=i[c].value+',';
      }
    }
    if(str==""){
      alert("请选择记录");die;
    }
    if(confirm("是否确定通过？")){
      $.ajax({
        type:"POST",
        url:"quetong",
        data:"id="+str,
        success:function(msg){

          if(msg==1){
            window.history.go(0)
          }
        }


      })
    }
   




  })

</script>
</body></html>