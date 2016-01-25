
<?php 
use yii\helpers\Url;
use yii\helpers\Html;

?>




    <div class="t_min t_tit">当前位置：<a href="/">首页</a> > 我的趣淘学</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">

            <div class="mt_rt" id="topmenus">
          
               
            </div>
        </div>
        <div class="mt_le t_le" id="leftmenus">
            

        </div>
        <div class="mt_ri t_ri">

           
            <div class="mt_rli">
                <div class="right">
                    <div class="myjob">
                        <span>我的兼职:</span>
                    </div>
                    <table class="date" cellpadding="0" cellspacing="0" width="960px">
                        <thead>
                            <tr style="background: #E5E5E4; border: 0;">
                                <th class="id">序号</th>
                                <th class="id">兼职职位</th>
                                <th class="type">行业类型</th>
                                <th class="add">工作地点</th>
                                <th class="money">工资待遇</th>
                                <th class="action">操作</th>
                            </tr>
                        </thead>
                        <tbody id="divjobDiv"></tbody>
                    </table>
                    <script type="text/template" id="buinessjobTemplate">
                        <tr class="tr">
                            <td>{jobId}</td>
                            <td>{name}</td>
                            <td>{workTypeName}</td>
                            <td>{province} {city}</td>
                            <td>{salary}/天</td>
                            <td>
                            <a href="/merchant/merchantParttimeList">查看详情</a>
                            </td>
                        </tr>
                    </script>
                    <div class="solid"></div>
                    <div class="order">
                        <span>我的订单:</span>
                    </div>
                    <table class="two" width="960px" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
                        <thead>
                            <tr style="background: #E5E5E4; border: 0;">
                                <th class="th">序号</th>
                                <th class="th">订单号</th>
                                <th class="th">交易时间</th>
                                <th class="th">用户</th>
                                <th class="th">消费总额</th>
                                <th class="th">优惠金额</th>
                                <th class="th">实付金额</th>
                                <th class="th" style="width:133px">操作</th>
                            </tr>
                        </thead>
                        <tbody id="OrderDiv"></tbody>
                    </table>
                    <script type="text/template" id="OrderTemplate">
                        <tr class="tr">
                            <td>{orderId}</td>
                            <td>{orderNo}</td>
                            <td>{orderTime}</td>
                            <td><div class="shopname" title="{userName}">{userName}</div></td>
                            <td>{totalAmt}元</td>
                            <td>{favouredAmt}元</td>
                            <td>{realAmt}元</td>
                            <td>已完成</td>
                        </tr>
                    </script>
                </div>
            </div>
        </div>
    </div>
      
    <script type='text/javascript' src="/public/js/pagebase.js"></script>
    <script type='text/javascript' src="/public/js/merchantIndex.js"></script>
    <script type="text/javascript">
        $(function () {
        	  GLOBAL.pagebase.GetTop();
              GLOBAL.pagebase.City();
            GLOBAL.pagebase.loadingMerchantPage('');
        })
    </script>
 
<style type="text/css">
		p{cursor:pointer}
		
	</style>

	


</body>
</html>