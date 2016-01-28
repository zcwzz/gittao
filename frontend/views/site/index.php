<?php

/* @var $this yii\web\View */

$this->title = '逃学叭叭叭吧';
?>
<link href="public/css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="public/js/jquery.slideBox.js" type="text/javascript"></script>

<div class="t_min t_tit">当前位置：<a href="#">首页</a></div>
    <div class="t_img" id="scrolldiv">

<!-- 
        <div id="top_roll_pic"> -->
		<div id="demo1" class="slideBox">
  <ul class="items">
    <li><a href="#" title="这里是测试标题一"><img src="public/images/lunbo/1.jpg" height='450' width='1350'></a></li>
    <li><a href="#" title="这里是测试标题二"><img src="public/images/lunbo/2.jpg" height='450' width='1350'></a></li>
    <li><a href="#" title="这里是测试标题三"><img src="public/images/lunbo/3.jpg" height='450' width='1350'></a></li>
    <li><a href="#" title="这里是测试标题四"><img src="public/images/lunbo/4.jpg" height='450' width='1350'></a></li>
  </ul>
</div>
   
    <!--Luara图片切换骨架end-->
    <script>
    
    </script>
            <!-- <div class="t_imgli1"></div>
            <div class="t_imgli2" style="display: none;"></div>
            <div class="t_imgli3" style="display: none;"></div> 
        </div>-->

    </div>
    <!--t_box-->
    <div class="t_box">
        <div class="t_boxi t_min">
            <ul>
                <li><b class="b1"></b><a href="#">安全保障</a>保证金模式<br> <strong>保障兼职回报</strong></li>
                <li><b class="b2"></b><a href="#">资质认证</a>企业、大学生<br> <strong>审核机制</strong></li>
                <li><b class="b3"></b><a href="#">行业引领</a>构建新时代<br> <strong>学生兼职模式</strong></li>
                <li><b class="b4"></b><a href="#">免费</a>商家免费发布入驻<br> <strong>学生免费获得兼职职位</strong></li>
                <li><b class="b5"></b><a href="#">励志</a>用自己的双手<br> <strong>创造财富</strong></li>
                <li><b class="b6"></b><a href="#">积累</a>工作经验积累<br> <strong>信用积累</strong></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <!--t_box end-->
    <!--t_frdl-->
    <div class="t_frdl">
    <div class="t_frdli t_min">
    <h1>他们也喜欢我们</h1>
    <a href="http://progstartup.com/" target="_blank"><img src="/public/images/textimg/l1.jpg" height="80" width="158"></a>
    <a href="#"><img src="/public/images/textimg/l7.jpg" height="80" width="158"></a>
    <a href="#"><img src="/public/images/textimg/l7.jpg" height="80" width="158"></a>
    <a href="#"><img src="/public/images/textimg/l7.jpg" height="80" width="158"></a>
    <a href="#"><img src="/public/images/textimg/l7.jpg" height="80" width="158"></a>
    <a href="#"><img src="/public/images/textimg/l7.jpg" height="80" width="158"></a>
    <a href="#" class="nmad"><img src="/public/images/textimg/l7.jpg" height="80" width="158"></a></div>
    <div class="clear"></div>
    </div>
    
    <!--frdl end-->
<link href="css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.slideBox.js" type="text/javascript"></script>
<script>
jQuery(function($){
	$('#demo1').slideBox();
	$('#demo2').slideBox({
		direction : 'top',//left,top#方向
		duration : 0.3,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		startIndex : 1//初始焦点顺序
	});
	$('#demo3').slideBox({
		duration : 0.3,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		hideClickBar : false,//不自动隐藏点选按键
		clickBarRadius : 10
	});
	$('#demo4').slideBox({
		hideBottomBar : true//隐藏底栏
	});
});
</script>