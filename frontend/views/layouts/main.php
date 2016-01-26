<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="" />
<meta name="Keywords" content="" />
<link rel="stylesheet" href="/public/css/style.css" />
<link rel="stylesheet" href="/public/css/common.css" />
<link rel="stylesheet" href="/public/css/pagecss.css" />
<link rel="stylesheet" type="text/css" href="/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/public/css/start.css" />
<script type="text/javascript" src="/public/js/jquery-1.11.3.min.js"></script> 
<script type="text/javascript" src="/public/js/pagebase.js"></script>
<link rel="stylesheet" href="/public/css/jquery.tooltip.css" type="text/css"/>
<style type="text/css">
        .tr:nth-of-type(even) {
             background: #F6F6F4;
            cursor: pointer;
        }

        .tr:nth-of-type(odd) {
           
            cursor: pointer;
        }
    </style>
<title><?= Html::encode($this->title) ?></title>
<!--head-->
    <div class="head">
        <div class="t_min header">
            <div class="t_le"><div class="t_le" id="city" style=" position:relative;">
                <font class="f_l">欢迎光临趣淘学 </font>
                <span class="f_l ml_10">测试版</span>
                <b class="cityTitle f_l ml_10" id='city_name' atr="110001">北京</b>
                <div class="city_swich f_l ml_10" style="float:right;">
                    <span class="city_nav" id="city_nav" onclick="this.className='city_nav city_hover';document.getElementById('city_link').className='city_link city_hovers';document.getElementById('city_link').style='position:absolute; left:10px; top:30px;z-index:9999';">[切换城市]</span>
                </div>
				<style type="text/css">
				.city_hovers {
					display: block;
				}
				.city_link {
					background: #ffffff none repeat scroll 0 0;
					border: 2px solid #f25000;
					width: 305px;
				}
				.city_show {
					background: #ccc none repeat scroll 0 0;
					cursor: pointer;
					height: 18px;
					line-height: 18px;
					padding: 5px;
				}
				.city_show {
					cursor: pointer;
					line-height: 18px;
				}

				.city_links {
					background: #f6f6f6 none repeat scroll 0 0;
					display: inline-block;
					font-size: 13px;
					height: 30px;
					line-height: 30px;
					margin-bottom: 1px;
					margin-right: 1px;
					text-align: center;
					vertical-align: top;
					width: 60px;
				}
				</style>
                <div id="city_link" class="city_link" style="position:absolute; left:10px; top:30px;display:none;">
                    <div class="city_show">
                        <span style="float:right" class="f_red f_r" href="javascript:;" title="关闭窗口" onclick="document.getElementById('city_nav').className='city_nav';document.getElementById('city_link').className='city_link';document.getElementById('city_link').style='z-index:-1;position:absolute; left:10px; top:30px;display:none;';return !1;">[关闭]</span>

                    </div>
                    <div id="listCity">
					<?php 
						$cache = \Yii::$app->cache;
						$city=$cache->get('cit');
						foreach($city as $v){
					?>
					<a class="city_links" href="#" onclick="document.getElementById('city_link').style='z-index:-1;position:absolute; left:10px; top:30px;display:none;';return !1;" city='<?php echo $v['region_id'];?>' ><?php echo $v['region_name'];?></a>
					<?php }?>
                        <!-- <a class="city_links" href="#" onclick="document.getElementById('city_link').style='z-index:-1;position:absolute; left:10px; top:30px;';return !1;">北京</a>
                        <a class="city_links" href="#" onclick="document.getElementById('city_link').style='z-index:-1;position:absolute; left:10px; top:30px;';return !1;">南京</a> -->
                    </div>
					<script type="text/javascript">
					$(function (){
						$(".city_links").click(function(){
							var cityname=$(this).html();
							$("#city_name").html(cityname)
						})
					})
					</script>
                </div>
            </div>
			</div>
            <div class="t_ri">
			 <?php
							$session = \Yii::$app->session;
							$session->open();
							if(!$session->get('user_id')){
				?>
				
                <span><a href="<?= Url::to(['user/register']); ?>">注册 |</a> <a href="<?= Url::to(['user/login']); ?>" class="a1">登陆</a></span>
				<?php }else{ ?>
                <span class="mtx"><a href="<?= Url::to(['consumption/index']); ?>">我的趣淘学</a> <a href="<?= Url::to(['user/outlogin']); ?>" class="a1">退出登陆</a></span>
				<?php } ?>


               
                <span> <a href="#">帮助中心</a></span>
                <span class="app"><a href="#">APP</a></span>
            </div>
        </div>
    </div>
    <!--head end-->
    <!--t_nav-->
    <div class="t_nav" style='background: #444444 none repeat scroll 0 0;'>
        <div class="t_navy"></div>
        <div class="t_navi t_min"> 
            <div class="t_le"><a href="index.html" title="black"><img src="/public/images/mlogo.png" width="200" height="100" border="0" /></a></div>
            <div class="t_le">
                <ul>
                    <li class="menu bg"><a href="<?= Url::to(['site/index']); ?>">首&nbsp;&nbsp;页</a></li>
                    <li class="menu"><a href="<?= Url::to(['merchants/index']); ?>">优质商家</a></li>
                    <li class="menu"><a href="<?= Url::to(['parttime/index']); ?>" >兼职机会</a></li>
                    <li class="menu"><a href="<?= Url::to(['safety/index']); ?>" >安全保障</a></li>
                    <li class="menu"><a href="<?= Url::to(['about/index']); ?>">关于我们</a></li>
                </ul>
            </div>
            <div class="t_le so">
                <input name="" type="text"  class="it"/><input name="" type="button"  class="bt"/>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<!--t_nav end-->
</head>
<!-- body -->
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
<!-- body end-->
<!--foot footer-->
<div class="foot">
    <div class="footi t_min">
        <ul>
            <li>
                <h1>关于我们</h1>
                <p>趣淘学介绍们</p>
                <p>关于我们</p>
                <p>联系我们</p>
            </li>
            <li>
                <h1>服务指南</h1>
                <p>趣淘学介绍们</p>
                <p>关于我们</p>
                <p>联系我们</p>
            </li>
            <li>
                <h1>帮助中心</h1>
                <p>常见问题</p>
                <p>会员注册</p>
                <p>会员登陆</p>
            </li>
            <li>
                <h1>服务热线</h1>
                <p>010-123456789</p>
                <p>周一至周五6:30-18:00</p>
                <p>邮箱:123@123.com</p>
                <p>QQ一群:789456123</p>
                <p>QQ二群:123456789</p>
            </li>
            <li class="nbo">
                <h1>关注二维码</h1>
                <p><img src="/public/images/er_01.jpg" width="80" height="80" />&nbsp;&nbsp;<img src="/public/images/er_02.jpg" width="80" height="80" /></p>
                <p>下载APP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关注微信</p>
            </li>
        </ul>
    <div class="clear "></div>
    </div>
</div>
<div class="footer">
    <div class="footeri t_min">
        <p>京ICP备15001122 qutaoxue 2015-2018 优时梦想网络科技（北京）有限公司</p>
        <p>
            <img src="/public/images/textimg/b_01.jpg" width="112" height="40" />&nbsp;&nbsp;
            <img src="/public/images/textimg/b_02.jpg" width="129" height="40" />&nbsp;&nbsp;
            <img src="/public/images/textimg/b_03.jpg" width="129" height="40" />&nbsp;&nbsp;
            <img src="/public/images/textimg/b_01.jpg" width="112" height="40" />&nbsp;&nbsp;
            <img src="/public/images/textimg/b_02.jpg" width="129" height="40" />&nbsp;&nbsp;
            <img src="/public/images/textimg/b_03.jpg" width="129" height="40" />
        </p>
    </div>
</div>
<!--foot footer end-->

</html>
<?php $this->endPage() ?>

<script>
    $(document).on('click','.menu',function () {
        $('.menu').attr('class','menu');
        $(this).attr('class','menu bg');
    })
</script>
<script type='text/javascript' src="public/js/pagebase.js"></script>
<script type='text/javascript'>
$(function(){
	  GLOBAL.pagebase.GetTop();
      GLOBAL.pagebase.City();
})</script>

