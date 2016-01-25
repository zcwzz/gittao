    <link rel="stylesheet" href="/public/css/comm.css">
    <link rel="stylesheet" href="/public/css/shop.css">
    <link rel="stylesheet" href="/public/css/sty.css">
    <link rel="stylesheet" type="text/css" href="/public/css/kkpager_orange.css">
    <link rel="stylesheet" type="text/css" href="/public/css/start.css">
    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的趣淘学</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">

            <div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>23112312321321321321321321321311111111111111111请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
        </div>
        <div class="mt_le t_le" id="leftmenus">  
        <a href="http://www.qutaoxue.net/merchant/merchantIndex" atr="home"><h1>我的门店  </h1></a> 
        <ul>     
            <li><a href="" atr="order">我的订单</a></li>     
            <li><a class="co" href="" atr="comment">我的评论</a></li>     
            <h2>我的兼职</h2>     
            <li><a href="http://www.qutaoxue.net/merchant/merchantPublish" atr="publish">发布兼职</a></li>     
            <li><a href="http://www.qutaoxue.net/merchant/merchantParttimeList" atr="list">兼职列表</a></li>     
            <h2>企业设置</h2>     
            <li><a href="http://www.qutaoxue.net/merchant/merchantInfo" atr="base">基本资料</a></li>     
            <li><a href="http://www.qutaoxue.net/merchant/merchantSafe" atr="safe">账户安全</a></li>     
            <li> <a href="http://www.qutaoxue.net/merchant/merchantBalance" atr="account">账户余额</a></li> 
        </ul>
        </div>
        <div class="mt_ri t_ri">
            <div class="mt_rli">
                <div class="right">
                    <div class="pinglun">
                        <span class="no" id="waitCommentBtn" style="cursor: pointer">
                            待评论
                        </span>
                        <span class="" id="yesCommentBtn" style="cursor: pointer">
                            已评论
                        </span>
                    </div>
                    <div class="kuang">
                        <span class="info">兼职信息</span>
                        <span class="type">评价状态</span>
                    </div>
                    <div class="daipinglun">
                        <ul id="commentdivDemo" class="daipinglun"></ul>

                     
                        <script type="text/template" id="commentTemplate">
                            <li>
                                <img src="{parttimePic}" />
                                <span style="position:relative;top:-55px;">
                                    <font class="name"> {name}</font> <br />
                                    <font style="position:relative;left:-20px">{studentName}</font> <br />
                                    <font style="position:relative;left:70px">兼职时间：{workEndTime}</font>
                                </span>
                                <div class="comentforOne" style="cursor:pointer" atr="{userId}" job='{jobId}' keyid={applyId} types='{type}'>
                                    <e class="btnCommentLink" clk='0'>
            <a href="javascript:GLOBAL.pagebase.commentBtnClick(this,{types})"  style="color:#fff">点击评论</a>
            </e>
                                </div>
                            </li>
                        </script>
                        
                        <script type="text/template" id="studentFrmComment">
                            <div class="idDiv" atr='{commentorId}' bid="{toCommentorId}" jid="{orderId}">
                                <img src="/public/images/touxiang.png" style="width:50px;height:50px;position:relative;left:-3em;margin-top:24px;" />
                                <span style="float:left;position:relative;left:6em;top:0.8em">
                                    <e>{commentor}</e>
                                    <br />{content}
                                </span>
                                <span class="score"> {score} </span><br />
                                <sapn style="position:relative;left:6em;top:-1.8em"> {commentTime}</span>
                            </div>
                        </script>
                        <div style="display:none" id="studentFrm">
                            <img src="/public/images/changlan.png" class="changlan">
                            <div id="frmdiv">

                            </div>
                            <div class="quiz">
                                <h3>我要评论</h3>
                                <div class="quiz_content">
                                    <div class="goods-comm">
                                        <div class="goods-comm-stars">
                                            <span class="star_l">满意度：</span>
                                            <div id="rate-comm-1" class="rate-comm"><ul style="background-image: url(&quot;../images/stars.jpg&quot;); height: 24px; width: 120px;" class="rater-star"><li style="width: 120px; z-index: 7;" class="rater-star-item-tips"></li><li style="background-image: url(&quot;../images/stars.jpg&quot;); height: 24px; width: 0px; z-index: 6;" class="rater-star-item-current"></li><li style="height: 24px; width: 24px; z-index: 5; background-image: url(&quot;../images/stars.jpg&quot;);" title="1" class="rater-star-item"><div class="popinfo"></div></li><li style="height: 24px; width: 48px; z-index: 4; background-image: url(&quot;../images/stars.jpg&quot;);" title="2" class="rater-star-item"><div class="popinfo"></div></li><li style="height: 24px; width: 72px; z-index: 3; background-image: url(&quot;../images/stars.jpg&quot;);" title="3" class="rater-star-item"><div class="popinfo"></div></li><li style="height: 24px; width: 96px; z-index: 2; background-image: url(&quot;../images/stars.jpg&quot;);" title="4" class="rater-star-item"><div class="popinfo"></div></li><li style="height: 24px; width: 120px; z-index: 1; background-image: url(&quot;../images/stars.jpg&quot;);" title="5" class="rater-star-item"><div class="popinfo"></div></li></ul></div><div class="rater-click-tips"><span>点击星星就可以评分了</span></div><div class="rater-star-result"></div>
                                        </div>
                                    </div>
                                    <div class="l_text">
                                        <label class="m_flo">内  容：</label>
                                        <textarea name="textContent" id="txtContent" class="text"></textarea>
                                        <span class="tr">字数限制为5-200个</span>
                                    </div>
                                    <input class="btm" value="我要评论" id="btnCommoneTosystem" type="button">
                                </div>
                            </div>
                        </div>

                    </div>
               
               
                  <div id="kkpager"><div><span class="disabled">首页</span><span class="disabled">上一页</span><span class="curr">1</span><span class="disabled">下一页</span><span class="disabled">尾页</span><span class="totalText"></span></div><div style="clear:both;"></div></div>
               
               
                </div>
            </div>
        </div>
    </div>
     
<style type="text/css">
        p{cursor:pointer}
        
    </style>

    



    <script type="text/javascript" src="/public/js/pagebase.js"></script>
    <script type="text/javascript" src="/public/js/merchantComment.js"></script>
    <script type="text/javascript" src="/public/js/kkpager.js"></script>
    <script type="text/javascript" src="/public/js/comment.js"></script>
    <script type="text/javascript">
        $(function () {
            var type = 0;
            var pageIndex = 1;
            GLOBAL.pagebase.GetTop();
            GLOBAL.pagebase.City();
            GLOBAL.pagebase.loadCommentInfo('', pageIndex, type);
        })
    </script>

</body></html>