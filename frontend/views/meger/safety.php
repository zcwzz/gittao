<?php 
use yii\helpers\Url;
use yii\helpers\Html;

?>

<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="/public/css/comm.css">
    <link rel="stylesheet" href="/public/css/shop.css">
    <link rel="stylesheet" href="/public/css/sty.css">S
<script src="/public/js/jquery-1.js" type="text/javascript"></script>
<script src="/public/js/globl.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jsbase.js"></script>
<script type="text/javascript" src="/public/js/url.js"></script>
<script type="text/javascript" src="/public/js/dataHandle.js"></script>
<link rel="stylesheet" href="/public/css/jquery.css" type="text/css">
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script src="/public/js/jquery-1.8.js" type="text/javascript"></script>

        <title>趣淘学</title>
</head>


    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的趣淘学</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">
            <div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>z请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
        </div>

        <?php echo $this->render("_sjleftnav");?>

        <div class="mt_ri t_ri">
            <div class="mt_rli">
                <div class="right">
                    <div class="tittle">
                        <span>账户安全:</span>
                    </div>
              
                    <div class="next">
                        <div class="update">
                            <img src="/public/images/zhengquetishi.png">
                            <span>密码修改</span>
                            <m>
                                建议定期更换密码，且数字、字母、符号至少包含
                                <p>两种,长度为8-20个字符的密码。</p>
                            </m>
                            <div>
                                <a href="javascript:void(0)" class="xiugai"  onclick="GLOBAL.pagebase.btnHrefClick(this)">修改</a>
                            </div>
                        </div>
                        <div class="phone">
                            <img src="/public/images/zhengquetishi.png"><span>手机验证</span>
                            <m>
                                已验证手机：123*****123若已丢失或停用，
                                <p>请立即更换，避免账户被盗。</p>
                            </m>
                            <div>
                                <a href="javascript:void(0)" bik="/merchant/merchantUpdatePs?type=3" target="a-frame" onclick="GLOBAL.pagebase.btnHrefClick(this)">修改</a>
                            </div>
                        </div>
                        <div class="paypwd">
                            <img src="/public/images/zhengquetishi.png" id="imageIMG"><span>支付密码</span>
                            <m>
                                用于虚拟账户支付和提现，且设置密码一个包含
                                <p>字母加数字或字符，长度为8-20个字符的密码。</p>
                            </m>
                            <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                <p class="qiyong">
                                    <a style="position: relative; left: 4px;" bik="/merchant/merchantUpdatePs?type=2" target="a-frame" href="javascript:void(0)" onclick="GLOBAL.pagebase.btnHrefClick(this)" class="">修改</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
<style type="text/css">
		p{cursor:pointer}
		
	</style>
     <script type="text/javascript" src="/public/js/pagebase.js"></script>
    <script type="text/javascript" src="/public/js/merchantSafe.js"></script>
   
      <script type="text/javascript">
        $(function () {
        	  GLOBAL.pagebase.GetTop();
              GLOBAL.pagebase.City();
      GLOBAL.pagebase.loadingPageSafe();
           
        })
    </script>
    <script>
    $(".xiugai").live('click',function(){
        location.href="<?= URL::to(['meger/password'])?>";
    })
    </script>

</body></html>