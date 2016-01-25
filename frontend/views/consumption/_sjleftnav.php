<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
    <div class="mt_le t_le"  >
            <a href="" atr="home"><h1>商家中心</h1></a>
            <ul>
                <h2>我的订单</h2><!-- class="co"       现在是哪个页面就放哪个页面的a标签里-->
                <li><a id='b1'  onclick='show(1,7)'  href="<?= Url::to(['consumption/order']); ?>" atr="order">我的订单</a></li>
                <li><a id='b2'  onclick='show(2,7)'  href="<?= Url::to(['consumption/payment']); ?>" atr="comment">预收明细</a></li>
                <h2>我的兼职</h2>
                <li><a id='b3'  onclick='show(3,7)'  href="<?= Url::to(['business/index']); ?>" atr="publish">发布兼职</a></li>
                <li><a id='b4'  onclick='show(4,7)'  href="<?= Url::to(['business/lists']); ?>" atr="list">兼职列表</a></li>
                <h2>企业设置</h2>
                <li><a id='b5'  onclick='show(5,7)'  href="<?= Url::to(['meger/means']); ?>" atr="base">基本资料</a></li>
                <li><a id='b6'  onclick='show(6,7)'  href="<?= Url::to(['meger/safety']); ?>" atr="safe">账户安全</a></li>
                <li><a id='b7'  onclick='show(7,7)'  href="<?= Url::to(['meger/balance']); ?>" atr="account">账户余额</a></li>
            </ul>
        </div>

<script>
    function show(i,j){
        for(var k=1;k<=j;k++){
            document.getElementById('b'+k).className="";
        }
        document.getElementById('b'+i).className="co";
    }
</script>

