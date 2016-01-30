<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;


?>


<html><head><script src="/public/css/jquery-1.js" type="text/javascript"></script>
<script src="/public/js/globl.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jsbase.js"></script>
<script type="text/javascript" src="/public/js/url.js"></script>
<script type="text/javascript" src="/public/js/dataHandle.js"></script>
<link rel="stylesheet" href="/public/css/jquery.css" type="text/css">
<script type="text/javascript" src="/public/js/jquery_002.js"></script>
<script src="/public/js/jquery-1.8.js" type="text/javascript"></script>


  <!--[if lt IE 9]>
    <script src="../Scripts/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/public/css/shop.css">
    <link rel="stylesheet" href="/public/css/sty.css">
    <link rel="stylesheet" href="/public/css/comm.css">
    <link rel="stylesheet" href="/public/css/css.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>趣淘学</title>
    <link rel="stylesheet" href="/public/css/validationEngine.css" type="text/css">
    <script src="/public/js/jquery_003.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="/public/js/merchantUpdatePs.js"></script>

</head>
<body>

    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的趣淘学</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">

            <div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/css/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
        </div>
        <!--左边部分-->
         <?php echo $this->render("_sjleftnav");?>
        <div class="mt_ri t_ri">
            <div class="mt_rli">
                <div id="top" style="border-bottom: solid 1px #ccd6d7; height: 64px; border-bottom:" class="studentdetailtop  borbot1" >
                            <span id="detail" class="borbotff5400 colorff5400 detail  dis" name="<?php if($detail['detail']=='detail1'){echo $detail['detail'];}else{echo 'detail1';}?>" style="margin:0 ;">
                            修改登录密码
                            </span>
                            <span id="" class=" dis marleft30 detail" style="margin:0 ;"  name="<?php if($detail['detail']=='detail2'){echo $detail['detail'];}else{echo 'detail2';}?>" >
                            修改支付密码
                            </span>
                            <span id="" class=" dis marleft30 detail" style="margin:0 ;"  name="<?php if($detail['detail']=='detail3'){echo $detail['detail'];}else{echo 'detail3';}?>" >
                            手机验证
                        </span>
                </div>

                <div name="content1">
                    <?php $form = ActiveForm::begin([
                        'action' => ['meger/updpwd'],
                        'method'=>'post',
                    ]); ?>

                        <?= $form->field($model, 'user_pwd',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入旧密码']) ?>
                        <span style="color: #9f9fa0; font-size: 12px;margin-left:80px">长度六位以上的数字和字母结合</span>
                       <br><br>
                        <?= $form->field($model, 'user_password',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入新密码']) ?>
                        <span style="color: #9f9fa0; font-size: 12px;margin-left:80px">不想更换请留空</span>
                        <br><br>
                          
                         <?= $form->field($model, 'isPassword',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入确认密码']) ?>
                         <span style="color: #9f9fa0; font-size: 12px;margin-left:80px">再次输入与上面相同的密码</span>
                        <br><br>
                        
                        <?= Html::submitButton('完成', ['class'=>'wid100 height30 back center white marleft50','name' =>'submit-button',]) ?>
                   <!--  </form> -->
                   <?php ActiveForm::end(); ?>
                    </div>
                    <div name="content2" style="display: none;">
                    <!-- <form class="form" id="zhifups" > -->
                    <?php $form = ActiveForm::begin(
                        [
                            'action' => [''],
                            'method' => 'post',
                        ]
                    );?>
                        
                        <?= $form->field($model, 'user_phone',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入手机号码']) ?>
                        <span style="color: #9f9fa0; font-size: 12px;margin-left:100px">&nbsp;稍后您的手机将会收到短信验证码 60s后重发</span>
                        <br><br>

                         <?= $form->field($model, 'smsValCode',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}<span class="mag" style="cursor: pointer; background:red;" id="smsValidCodeText" atr="0">获取验证码</span></div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'您的手机短信验证码']) ?>
                      
                        <span style="color: #9f9fa0; font-size: 12px;"></span>
                        <br><br>
                        <?= $form->field($model, 'user_password',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'设置新密码']) ?>
                        <span style="color: #9f9fa0; font-size: 12px;margin-left:100px">长度为六位以上的数字和字母的组合</span>
                        <br><br>
                        <?= $form->field($model, 'isPassword',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入确认密码']) ?>
                        <span style="color: #9f9fa0; font-size: 12px;margin-left:100px">您再次输入与上面相同的密码</span>
                        <br><br>
                       
                        <?= Html::submitButton('完成', ['class'=>'wid100 height30 back center white marleft50','name' =>'submit-button',]) ?>
                    <?php ActiveForm::end(); ?>

                    </div>
                    <div name="content3" style="display: none;">
                         <?php $form = ActiveForm::begin([
                            'action' => ['test/getpost'],
                            'method'=>'post',
                        ]); ?>
                        <!-- <span style="font-size: 12px;">
                            <span style="color: #da1f29">*</span>
                            您的手机号码&nbsp;：
                            <input name="mobilephone" id="mobilephone" class="in1 validate[required,custom[mobile]] " placeholder="请输入手机号码" style="height:25px" type="text">
                        </span> -->
                        <?= $form->field($model, 'user_phone',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入手机号码']) ?>
                        <br><br>
                        <span style="font-size: 12px;margin-left:12px">
                            <?= $form->field($model, 'verifyCode',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}<span class="mag" style="cursor: pointer; background:red;" id="smsValidCodeText" atr="0">获取验证码</span></div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'您的手机短信验证码']) ?>
                            <span style="color: #9f9fa0; font-size: 12px;margin-left:100px">稍后您的手机将会收到短信验证码 60s后重发</span>
  
                        </span>
                        &nbsp;&nbsp;
                        <span style="color: #9f9fa0; font-size: 12px;"></span>
                        <br> <br> <br>
                        <!-- <input id="btnPhone" value="完成" style="width: 100px; height: 30px; background: #f39700; color: white; margin-left: 9%;" type="button"> -->
                        <?= Html::submitButton('完成', ['class'=>'wid100 height30 back center white marleft50','name' =>'submit-button',]) ?>
                        &nbsp;&nbsp;&nbsp;
                    <!-- </form> -->
                    <?php ActiveForm::end(); ?>
                  </div>
                </div>
            </div>

        </div>
    </div>
     
 <style type="text/css">
                                .mag {
                                    color: #fef4e9;
                                    border: solid 1px #da7c0c;
                                    background: #f78d1d;
                                    background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
                                    background: -moz-linear-gradient(top, #faa51a, #f47a20);
                                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
                                    display: inline-block;
                                    outline: none;
                                    cursor: pointer;
                                    text-align: center;
                                    text-decoration: none;
                                    font: 16px/100% 'Microsoft yahei',Arial, Helvetica, sans-serif;
                                    padding: .25em 0.5em .3em;
                                    text-shadow: 0 1px 1px rgba(0,0,0,.3);
                                    -webkit-border-radius: .5em;
                                    -moz-border-radius: .5em;
                                    border-radius: .5em;
                                    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
                                    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
                                    box-shadow: 0 1px 2px rgba(0,0,0,.2);
                                }

                                    .mag:hover {
                                        background: #f47c20;
                                        background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
                                        background: -moz-linear-gradient(top, #f88e11, #f06015);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
                                    }

                                    .mag:active {
                                        color: #fcd3a5;
                                        background: -webkit-gradient(linear, left top, left bottom, from(#f47a20), to(#faa51a));
                                        background: -moz-linear-gradient(top, #f47a20, #faa51a);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f47a20', endColorstr='#faa51a');
                                    }
                            </style>
<script type="text/javascript">
$(function(){
        $('[name^="detail"]').click(function(){
            $('[name^="detail"]').removeClass('borbotff5400 colorff5400');
            $(this).addClass('borbotff5400 colorff5400');
            if($(this).attr('name')=='detail3'){
                $('[name^="content"]').hide();
                $('[name="content3"]').show();
            }else if($(this).attr('name')=='detail2'){
                $('[name^="content"]').hide();
                $('[name="content2"]').show();
            }else{
                $('[name^="content"]').hide();
                $('[name="content1"]').show();
            }
        })
    })

    $(document).ready(function(){
        var id = "<?php echo $detail['detail'];?>";
        $('[name^="detail"]').removeClass('borbotff5400 colorff5400');
        $('.'+id).addClass('borbotff5400 colorff5400');
        if(id=='detail3'){
            $('[name^="content"]').hide();
            $('[name="content3"]').show();
        }else if(id=='detail2'){
            $('[name^="content"]').hide();
            $('[name="content2"]').show();
        }else{
            $('[name^="content"]').hide();
            $('[name="content1"]').show();
        }
    })
</script>
	



</body></html>