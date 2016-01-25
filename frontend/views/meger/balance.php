<?php 
use yii\helpers\Url;
use yii\helpers\Html;

?>

<html><head><script src="/public/js/jquery-1.js" type="text/javascript"></script>
<script src="/public/js/globl.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jsbase.js"></script>
<script type="text/javascript" src="/public/js/url.js"></script>
<script type="text/javascript" src="/public/js/dataHandle.js"></script>
<link rel="stylesheet" href="/public/js/jquery.css" type="text/css">
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script type="text/javascript" src="/public/js/jquery-1.7.1.js"></script>



  <!--[if lt IE 9]>
    <script src="../Scripts/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/public/css/shop.css">
    <link rel="stylesheet" href="/public/css/sty.css">
    <link rel="stylesheet" href="/public/css/comm.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>趣淘学</title>
    <link rel="stylesheet" type="text/css" href="/public/css/kkpager_orange.css">
    <script type="text/javascript" src="/public/js/kkpager.js"></script>

    <script type="text/javascript" src="/public/js/pagebase.js"></script>
    <script type="text/javascript" src="/public/js/merchantBalance.js"></script>
    <script type="text/javascript">
        $(function () {
            GLOBAL.pagebase.GetTop();
            GLOBAL.pagebase.City();
            GLOBAL.pagebase.loadingMerchantPagebase('');

        })
    </script>
</head>

   
    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的门店</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">

            <div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>23112312321321321321321321321311111111111111111请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
        </div>
        <div class="mt_le t_le" id="leftmenus">  <a href="http://www.qutaoxue.net/merchant/merchantIndex" atr="home"><h1>我的门店  </h1></a> <ul>     <li><a href="http://www.qutaoxue.net/merchant/merchantOrder" atr="order">我的订单</a></li>     <li><a href="http://www.qutaoxue.net/merchant/merchantComment" atr="comment">我的评论</a></li>     <h2>我的兼职</h2>     <li><a href="http://www.qutaoxue.net/merchant/merchantPublish" atr="publish">发布兼职</a></li>     <li><a href="http://www.qutaoxue.net/merchant/merchantParttimeList" atr="list">兼职列表</a></li>     <h2>企业设置</h2>     
        <li><a href="<?=URL::to(['meger/means']);?>" atr="base">基本资料</a></li>     
        <li><a href="<?=URL::to(['meger/safety']);?>" atr="safe">账户安全</a></li>     
        <li> <a class="co" href="<?=URL::to(['meger/balance']);?>" atr="account">账户余额</a></li> </ul></div>

        <div class="mt_ri t_ri">
            <div class="mt_rli">
                <div class="right">
                    <div class="tittle">
                        <span>账户余额</span>
                    </div>
                    <div class="budget" id="bussinfo">
                        <span>预收余额：<e id="advancelimit">0.00元</e></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>预收限额：<i id="astrictlimit">0.00元</i></span>
                        <input value="限额申请" id="btnMYcount" style="background: #F39700; position: relative; left: 500px; color: #fff; width: 100px; height: 30px;border:0" type="button">
                    </div>
                  
<script>
    $('#btnMYcount').live('click',function(){
        //location.href="<?php URL::to(['Meger/limit']);?>";
        <?php echo \Yii::$app->urlManager->createUrl('Meger/limit')?>
    })
</script>

                    <div class="mingxi">
                        <span>预收明细</span>
                    </div>
                
                    <div class="red"></div>
                    <table class="date" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr style="background: #E5E5E4; height: 50px;">
                                <th class="left">时间</th>
                                <th class="left">类型</th>
                                <th class="left">金额</th>
                                <th>备注</th>
                            </tr>
                        </thead>
                        <tbody id="taoxueDemo"></tbody>没有数据！
                    </table>
                    <div id="kkpager"><div><span class="disabled">首页</span><span class="disabled">上一页</span><span class="curr">1</span><span class="disabled">下一页</span><span class="disabled">尾页</span><span class="totalText"></span></div><div style="clear:both;"></div></div>
                    <script type="text/template" id="taoxueTemplate">
                        <tr style="height:3em">
                            <td>{tradeTime}</td>
                            <td><e class="left">{tradeType}</e></td>
                            <td><e class="money">{tradeAmt}</e></td>
                            <td><e class="last">{remar}</e></td>
                        </tr>
                    </script>

                </div>

            </div>
        </div>
        </div>
        
         
<style type="text/css">
		p{cursor:pointer}
		
</style>


</body></html>
