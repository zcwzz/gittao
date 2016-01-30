<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

  <!--[if lt IE 9]>
    <script src="../Scripts/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/public/css/shop.css">
    <link rel="stylesheet" href="/public/css/sty.css">
    <link rel="stylesheet" href="/public/css/comm.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>趣淘学</title>
   <link href="/public/css/validationEngine.css" rel="stylesheet" type="text/css">
    <script src="/public/js/jquery_003.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/public/js/pagebase.js"></script>
    <script type="text/javascript" src="/public/js/merchantQuota.js"></script>
    <script type="text/javascript">
        $(function () {
              GLOBAL.pagebase.GetTop();
              GLOBAL.pagebase.City();
            $('.form').validationEngine();
            GLOBAL.pagebase.loadingPagebaseQuta('');
        })
    </script>
</head>
    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的趣淘学</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">
            <div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   
            <h1>请问</h1>   
            <p>手机号：13782519376</p></li>
            <li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
        </div>
        <!--左边部分-->
        <?php echo $this->render("_sjleftnav");?>
        <div class="mt_ri t_ri form">
            <div class="mt_rli">

            <?php $form = ActiveForm::begin(
                        [
                            'action' => ['meger/apply'],
                            'method' => 'post',  
                        ]
                    ); 
            ?>
                <h3 style="border-bottom: solid 1px; padding: 0; margin: 0; font-family: 微软雅黑; height: 40px; line-height: 40px">&nbsp;&nbsp;&nbsp;限额申请</h3>
                <div id="register" style="padding-top: 10px;">
                    <!-- <span style="font-size: 12px;">
                        预收余额&nbsp;:&nbsp; 
                        <span style="color: #da1f29; font-size: 12px;" id="advancelimit">0.00</span> <span style="font-size: 12px;">元</span>
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;  -->
                    <?= $form->field($model, 'mer_money',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}<span style="font-size: 12px;">元</span></div>'])->textInput(['class'=>'wid200 marleft5em']) ?>
                    <br>
                    <!-- <span style="font-size: 12px;">
                        预收限额&nbsp;:&nbsp; <span style="color: #da1f29; font-size: 12px;" id="astrictlimit">0.00</span> <span style="font-size: 12px;">元</span>
                    </span> -->
                    <?= $form->field($model, 'mer_limimoney',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}<span style="font-size: 12px;">元</span></div>'])->textInput(['class'=>'wid200 marleft5em']) ?>
                    <br>
                   <!--  <span style="font-size: 12px;">预收额申请&nbsp;:<input id="applyAmount" type="text"></span>&nbsp;
                    <span style="color: #9f9fa0; font-size: 12px;">最高申请额度：</span> <span style="color: #da1f29; font-size: 12px;" id="moneyTEXT">0.00</span>
                    <span style="font-size: 12px; color: #9f9fa0;">元</span> --> 
                    <?= $form->field($model, 'apply_limit',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}<span style="color: #9f9fa0; font-size: 12px;">最高申请额度：</span><span style="color: #da1f29; font-size: 12px;" id="moneyTEXT">0.00</span><span style="font-size: 12px; color: #9f9fa0;">元</span></div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'最高申请额度']) ?>
                    <br>
                    <!-- <span style="font-size: 12px;">
                        支付密码&nbsp;:
                        <input id="amountPassword" value="" type="password">
                    </span> --> 
                    <?= $form->field($model, 'mer_paypassword',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'支付密码']) ?>
                    <br>
                    <!-- <input id="btnApplay" value="提交申请" style="width: 100px; height: 30px; background: #f39700; color: white; margin-left: 9%;" type="button">&nbsp;&nbsp;&nbsp;<span style="color: #f39700; font-size: 12px;"> -->
                    <?= Html::submitButton('提交申请', ['class'=>'wid100 height30 back textcenter white marleft30','name' =>'submit-button',]) ?>
                </span>
                <?php
                    ActiveForm::end();
                ?>
                </div>
            </div>
        </div>
    </div>
     
<style type="text/css">
		p{cursor:pointer}
		
</style>
</body></html>