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
<h2>当前位置： 首页 > 兼职结算</h2>
<h2>结算学生：</h2>
<?php foreach($set as $v){ ?>
	<?php echo $v['stu_name'] ?>,

<?php } ?>
<h3>工资合计：<?php $a=0; foreach($set as $v){$a+=$v['job_money'];} echo $a; ?></h3>
<h3>兼职账户余额： 元</h3>
<div><p>支付方式&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 还需支付 元</p></div> 
<img src="./public/images/set.png" width="746" height="429" border="0" alt="">
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