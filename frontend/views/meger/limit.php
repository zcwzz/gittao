<?php 
use yii\helpers\Url;
use yii\helpers\Html;

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

            <div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>23112312321321321321321321321311111111111111111请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
        </div>
        <div class="mt_le t_le" id="leftmenus">  <a href="http://www.qutaoxue.net/merchant/merchantIndex" atr="home"><h1>我的门店  </h1></a> <ul>     <li><a href="http://www.qutaoxue.net/merchant/merchantOrder" atr="order">我的订单</a></li>     <li><a href="http://www.qutaoxue.net/merchant/merchantComment" atr="comment">我的评论</a></li>     <h2>我的兼职</h2>     <li><a href="http://www.qutaoxue.net/merchant/merchantPublish" atr="publish">发布兼职</a></li>     <li><a href="http://www.qutaoxue.net/merchant/merchantParttimeList" atr="list">兼职列表</a></li>     <h2>企业设置</h2>     <li><a class="co" href="<?=URL::to(['meger/means']);?>" atr="base">基本资料</a></li>     
        <li><a href="<?=URL::to(['meger/safety']);?>" atr="safe">账户安全</a></li>     
        <li> <a href="<?=URL::to(['meger/balance']);?>" atr="account">账户余额</a></li></ul></div>
        <div class="mt_ri t_ri form">

            <div class="mt_rli">
                <h3 style="border-bottom: solid 1px; padding: 0; margin: 0; font-family: 微软雅黑; height: 40px; line-height: 40px">&nbsp;&nbsp;&nbsp;限额申请</h3>
                <div id="register" style="padding-top: 10px;">
                    <span style="font-size: 12px;">
                        预收余额&nbsp;:&nbsp; <span style="color: #da1f29; font-size: 12px;" id="advancelimit">0.00</span> <span style="font-size: 12px;">元</span>
                    </span>&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12px;">
                        预收限额&nbsp;:&nbsp; <span style="color: #da1f29; font-size: 12px;" id="astrictlimit">0.00</span> <span style="font-size: 12px;">元</span>
                    </span><br>
                    <br>
                    <br> <span style="font-size: 12px;">预收额申请&nbsp;:<input id="applyAmount" type="text"></span>&nbsp;
                    <span style="color: #9f9fa0; font-size: 12px;">最高申请额度：</span> <span style="color: #da1f29; font-size: 12px;" id="moneyTEXT">0.00</span>
                    <span style="font-size: 12px; color: #9f9fa0;">元</span> <br>
                    <br>
                    <br> &nbsp;&nbsp;<span style="font-size: 12px;">
                        支付密码&nbsp;:
                        <input id="amountPassword" value="" type="password">
                    </span> <br>
                    <br>
                    <br> <input id="btnApplay" value="提交申请" style="width: 100px; height: 30px; background: #f39700; color: white; margin-left: 9%;" type="button">&nbsp;&nbsp;&nbsp;<span style="color: #f39700; font-size: 12px;">
                </span></div>
            </div>

        </div>
    </div>
     
<style type="text/css">
		p{cursor:pointer}
		
	</style>

	




</body></html>