<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script src="/public/js/jquery-1.js" type="text/javascript"></script>
<script src="/public/js/globl.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jsbase.js"></script>
<script type="text/javascript" src="/public/js/url.js"></script>
<script type="text/javascript" src="/public/js/dataHandle.js"></script>
<link rel="stylesheet" href="/public/css/jquery.css" type="text/css">
<script type="text/javascript" src="/public/js/jquery_002.js"></script>
<link rel="stylesheet" href="/public/css/shop.css">
<link rel="stylesheet" href="/public/css/sty.css">
<link rel="stylesheet" href="/public/css/comm.css">
<link href="/public/css/validationEngine.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
    <script src="../Scripts/html5shiv.js"></script>
    <![endif]-->
<link rel="stylesheet" href="/public/css/shop.css">
<link rel="stylesheet" href="/public/css/sty.css">
<link rel="stylesheet" href="/public/css/comm.css">
<link href="/public/css/validationEngine.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>趣淘学</title>
<style type="text/css">
span.add {
	margin-top: 22px;
	display: inline-block;
}

.input-file {
	position: relative; /* 保证子元素的定位 */
	width: 120px;
	height: 85px;
	background: #eee;
	border: 1px solid #ccc;
	text-align: center;
	cursor: pointer;
	top: -17px;
}

span {
	font-size: 12px;
}

.mar {
	margin-bottom: 2em;
}
</style>
<script src="/public/js/jquery_003.js" type="text/javascript" charset="utf-8"></script>
<script src="/public/js/jquery.js" type="text/javascript" charset="utf-8">
	
</script>

<script src="/public/js/ajaxupload.js" type="text/javascript"></script>
<script src="/public/js/pagebase.js" type="text/javascript"></script>
<script src="/public/js/merchantInfo.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function() {
		  GLOBAL.pagebase.GetTop();
          GLOBAL.pagebase.City();
		GLOBAL.pagebase.headFramePage('base');
		$('.form').validationEngine({

		});

		GLOBAL.pagebase.loadingPageInfo('');
	})
</script>


	
	<div class="t_min t_tit">
		当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的趣淘学
	</div>
	<!--我的趣淘学-->
	<div class="t_min">
		<div class="mt_ri_1">
			<div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>23112312321321321321321321321311111111111111111请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
		</div>
		<div class="mt_le t_le" id="leftmenus">  <a href="http://www.qutaoxue.net/merchant/merchantIndex" atr="home"><h1>我的门店  </h1></a> <ul>     <li><a href="http://www.qutaoxue.net/merchant/merchantOrder" atr="order">我的订单</a></li>     <li><a href="http://www.qutaoxue.net/merchant/merchantComment" atr="comment">我的评论</a></li>     <h2>我的兼职</h2>     <li><a href="http://www.qutaoxue.net/merchant/merchantPublish" atr="publish">发布兼职</a></li>     <li><a href="http://www.qutaoxue.net/merchant/merchantParttimeList" atr="list">兼职列表</a></li>     <h2>企业设置</h2>     
		<li><a class="co" href="<?=URL::to(['meger/means']);?>" atr="base">基本资料</a></li>     
		<li><a href="<?=URL::to(['meger/safety']);?>" atr="safe">账户安全</a></li>     
		<li> <a href="<?=URL::to(['meger/balance']);?>" atr="account">账户余额</a></li>
		 </ul></div>

		<div class="mt_ri t_ri">
			<div class="mt_rli">
				<div class="right">
					<div class="tittle">
						<span>企业信息</span> <span class="wenxinart">您好，修改资料任意资料都要重新审核，建议您不要频繁修改，以免给您带来不便。</span>
					</div>


		<?php 
			$form = ActiveForm::begin(['action' => ['meger/selmeans'],'method'=>'post',]); 
		?>
				<!-- 	<form class="form"> -->
						<p class="mar">
							<!-- 企业名称： <input id="bid" value="170" type="hidden"> 
							<input value="23112312321321321321321321321311111111111111111请问" class="validate[required]" id="enterprisename" name="enterprisename" placeholder="请输入企业名称" type="text"> -->
				<?= $form->field($model, 'mer_name')->textInput(['class'=>'validate[required]']) ?>
							
				

						</p>
						<p class="mar" style="text-indent: 1em">
							<!-- 联系人：<input value="付宗捷" class="validate[required]" id="contactperson" name="contactperson" placeholder="请输入联系人" type="text"> -->
							<?= $form->field($model, 'mer_contact')->textInput(['class'=>'validate[required]']) ?>
						</p>
						<p class="mar">
							<!-- 联系电话：<input value="13782519376" class="validate[required]" id="contactpersonphone" name="contactpersonphone" placeholder="请输入联系电话" type="text"> -->
							<?= $form->field($model, 'mer_conphone')->textInput(['class'=>'validate[required]']) ?>
						</p>
						<p class="mar" style="text-indent: 2em">
							<!-- 职位： <input value="总监" class="validate[required]" id="position" name="position" placeholder="请输入职位名称" type="text"> -->
							<?= $form->field($model, 'mer_position')->textInput(['class'=>'validate[required]']) ?>
						</p>
						<p class="mar">
							<!-- <select id="province" name="province"> <option value="-1">省</option>
								<option value="110000" selected="selected">北京市</option>
								<option value="110001" selected="selected">北京市</option>
							</select>
							<select id="area" name="area">
								<option value="110100">东城区</option>
								<option value="110700">石景山区</option>
								<option value="110800" selected="selected">海淀区</option>
								<option value="110900">门头沟区</option>
								<option value="111600">怀柔区</option>
								<option value="111700">平谷区</option>
								<option value="112800">密云县</option>
								<option value="112900">延庆县</option>
							</select> -->

							<?= $form->field($model, 'mer_address')->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中'], ['prompt'=>'请选择','style'=>'width:120px','id'=>'province','name'=>'province']) ?>
						</p>
						<p class="mar">
							<!-- <input value="撒大时代" class="validate[required]" id="address" name="address" style="margin-left: 63" placeholder="请输入企业地址" type="text"> -->
							<?= $form->field($model, 'mer_address')->textInput(['class'=>'validate[required]','placeholder'=>'请输入企业地址']) ?>
						</p>
						<p class="mar">
							<!-- 行业类型： <select name="industrytype" id="industrytype"> <option value="-1">请选择行业类型</option><option value="1">美食</option><option value="2">住宿</option><option value="3">娱乐</option><option value="4">生活</option><option value="5" selected="selected">其他</option></select> <select id="industChild" name="industChild" style="width: 130px;"><option value="64">旅游</option><option value="65">票务培训</option><option value="67">数码产品</option><option value="68">眼镜店</option><option value="70" selected="selected">其他</option></select> -->
							<?= $form->field($model, 'ind_type')->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中'], ['prompt'=>'请选择','style'=>'width:120px','height:200px']) ?>
						</p>
						<div>
							<div style="display: inline; position: relative; ">上传资质：</div>

							<!-- <div class="image" style="margin-top: 0;">
								<w> 企业LOGO</w>
								<div class="input-file">
									<img id="myselfpic1" class="" src="/public/images/qiyelogo.png" height="80" width="120">
								</div>
							</div>
							<div class="image">
								<w>营业执照</w>
								<div class="input-file">
									<img id="myselfpic2" class="" src="/public/images/zhizhao.png" height="80" width="120">
								</div>
							</div>
							<div class="image">
								<w>税务登记证</w>
								<div class="input-file">
									<img id="myselfpic3" class="" src="/public/images/shuiwu.png" height="80" width="120">
								</div>
							</div>
							<div class="image">
								<w>组织机构代码证</w>
								<div class="input-file">
									<img id="myselfpic4" class="" src="/public/images/jigou.jpg" height="80" width="120">
								</div>

							</div> -->
							<p class="warm">只能上传jpg、jpeg、png类型的图片，大小不能超过2M</p>
							<div style="position: relative; left: -1em;">
								<div style="display: inline-block; position: relative; top: -50px;">上传身份证：</div>
								<div class="imageq" style="margin: 0; display: inline-block;">
									<w>身份证背面</w>
									<div class="input-file">
										<img src="/public/images/zhenmian.png" id="preview6" border="0" height="85" width="120">
									</div>
								</div>
								<div class="imageq" style="display: inline-block;">
									<w>身份证正面</w>
									<div class="input-file">
										<img src="/public/images/fanmian.jpg" id="preview5" border="0" height="85" width="120">
									</div>
								</div>
								<p class="warm1">只能上传jpg、jpeg、png类型的图片，大小不能超过2M</p>
							</div>
							<p class="mar">
								<!--公司介绍：
								 <textarea class="validate[required]" id="companyinfo" name="companyinfo" style="width: 336px; height: 100px;"></textarea>
								<span style="position: relative; left: -90px; top: 40px; color: #e5e5e4">最多输入500字</span> -->
								<?= $form->field($model, 'mer_introduce')->textarea(['class'=>'validate[required]']) ?>
							</p>
							<div>
								<div style="display: inline-block; position: relative; top: -50px">企业图片：</div>
								<div class="imagew" style="display: inline-block;">
									<w>企业图片</w>
									<div class="input-file">

										<img id="myselfpic7" class="" src="/public/images/logo.png" height="80" width="120">

									</div>
								</div>
								<div class="imagew" style="display: inline-block;">
									<w>企业图片</w>
									<div class="input-file">
										<img id="myselfpic8" class="" src="/public/images/logo.png" height="80" width="120">
									</div>
								</div>
								<div class="imagew" style="display: inline-block;">
									<w>企业图片</w>
									<div class="input-file">
										<img id="myselfpic9" class="" src="/public/images/logo.png" height="80" width="120">
									</div>
								</div>
								<p class="warm">只能上传jpg、jpeg、png类型的图片，大小不能超过2M</p>
							</div>
							<p class="youhui">
								优惠设置：<input name="preferentialset" value="0" class="radio" checked="checked" onclick="	GLOBAL.pagebase.btnfavorable(0);" type="radio"> 无优惠 <input name="preferentialset" value="1" class="radio" onclick="	GLOBAL.pagebase.btnfavorable(1);" type="radio"> 满减 <input name="preferentialset" value="2" class="radio" onclick="	GLOBAL.pagebase.btnfavorable(2);" type="radio"> 折扣
							</p>
							<p>
							</p><div id="zhekou" style="display: none">
								<input value="0" style="width: 100px; height: 30px; margin-left: 60px;" name="discountamount" id="discountamount1" type="text">
								<y>%(可填1-100%兑付时按填写的折扣额度结算)</y>
							</div>
							<div id="manjian" style="display: none">
								每满
								<l style="color:red">100</l>
								减 <input value="0" style="width: 100px; height: 30px;" name="discountamount" id="discountamount2" type="text">
							</div>
							<p class="selectshow">
								<!-- 是否前台展示：<input class="radio" name="show" checked="checked" value="1" type="radio">&nbsp;是&nbsp;	
								<input class="radio" name="show" value="0" type="radio">&nbsp;否&nbsp; -->		
								<?= $form->field($model, 'mer_isshow',['template'=>''])->radioList(['1'=>'是','0'=>'否']) ?>		
							</p>
				<input value="修改" id="btnSave" style="width: 100px; height: 30px; background: #f39700; color: white; position: relative; left: 105px; margin-top: 3em; border: 0" type="submit">
							
						</div>
				<!-- 	</form>  -->
				<?php ActiveForm::end(); ?>	




				</div>
			</div>
		</div>
	</div>
<div class="qpzz" style="display: none;">
   <div class="tip_box">
    <h3>温馨提示</h3>
    <img src="/public/images/cross27.png" style="width:25px;height:25px;float: right;position: relative;top:-35px;left:-5px;">
     <div class="con_t">
<p id="titleBox">资料提交成功，工作人员会在3个工作日内完成您的资料审核，审核通过后您才可以使用网站上的功能。</p>

     </div>
     <br><br>
     <div style="float: right; margin-right: 20px;">
     	<input name="" id="studetail" value="确定" style="width: 70px; height: 30px;border-radius:4px;background-color:#0089cf;color: white;" type="button">&nbsp;&nbsp;	
     	<input name="" id="index" value="取消" style="width: 70px; height: 30px;border-radius:4px;background-color:#0089cf;color: white;" type="button">
     </div>
   </div>
</div>
	
<style type="text/css">
		p{cursor:pointer}
		
	</style>






</metahttp-equiv="x-ua-compatible"content="ie=9;><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"><input style="position: absolute; margin: -5px 0px 0px -175px; padding: 0px; width: 220px; height: 30px; font-size: 14px; opacity: 0; cursor: pointer; display: none; z-index: 2147483583;" name="file" type="file"></body></html>