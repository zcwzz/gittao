<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

?>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script src="/public/js/globl.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jsbase.js"></script>
<script type="text/javascript" src="/public/js/url.js"></script>
<script type="text/javascript" src="/public/js/dataHandle.js"></script>
<script src="/public/js/ajaxupload.js" type="text/javascript"></script>
<script src="/public/js/jquery-1.8.js" type="text/javascript"></script>
<link rel="stylesheet" href="/public/css/jquery.css" type="text/css">
<link rel="stylesheet" href="/public/css/comm.css">
<link href="/public/css/validationEngine.css" rel="stylesheet" type="text/css"> 


<link rel="stylesheet" href="/public/css/comm.css">
<link href="/public/css/validationEngine.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="/public/css/reset.css">
<!-- <script charset="utf-8" src="/public/js/zh_CN.js"></script> -->
<title>趣淘学</title>

	
	<div class="t_min t_tit">
		当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的趣淘学
	</div>
	<!--我的趣淘学-->
	<div class="t_min">
		<div class="mt_ri_1">
			<div class="mt_rt" id="topmenus"><ul><li class="img"> <img src="/public/images/us.jpg" height="100" width="100"></li><li class="wi1">   <h1>请问</h1>   <p>手机号：13782519376</p></li><li class="wi2">预收余额：0.00</li><li class="wi3">   <a href="http://www.qutaoxue.net/merchant/merchantQuota"><span class="bg1">额度申请</span></a><a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a> <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a></li></ul> <div class="clear"></div></div>
		</div>
		 <?php echo $this->render("_sjleftnav");?>

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
					<?= $form->field($model, 'mer_name')->textInput(['class'=>'validate[required]']) ?>
				</p>
				<p class="mar" style="text-indent: 5em">
					<?= $form->field($model, 'mer_contact')->textInput(['class'=>'validate[required]']) ?>
				</p>
				<p class="mar">
					<?= $form->field($model, 'mer_conphone')->textInput(['class'=>'validate[required]']) ?>
				</p>
				<p class="mar" style="text-indent: 5em">
					<?= $form->field($model, 'mer_position')->textInput(['class'=>'validate[required]']) ?>
				</p>
			<div class="tr height80 padleft2em">
				<div class="dis" style="float:left;">
					企业地址
				</div>

			<?= $form->field($model, 'mer_province',['template'=>'<div class="marleft5em" style="float:left;margin-right:10px;" >{label}{input}</div>'])->dropDownList(ArrayHelper::map($province,'region_id','region_name'),['class'=>'select_region','prompt'=>'请选择省']) ?>

			<?= $form->field($model, 'mer_city',['template'=>'<div class=""  style="float:left;margin-right:10px;">{label}{input}</div>'])->dropDownList(ArrayHelper::map($city,'region_id','region_name'),['class'=>'select_region','prompt'=>'请选择市']) ?>


			<?= $form->field($model, 'mer_area',['template'=>'<div class="" style="float:left;margin-right:10px;" >{label}{input}</div>'])->dropDownList(ArrayHelper::map($area,'region_id','region_name'),['class'=>'select_region','prompt'=>'请选择区']) ?>
			</div>
			<?= $form->field($model,'mer_address',['template'=>'<div class="" style="float:left;" >{label}{input}</div>{error}'])->textInput(['class'=>'wid365','placeholder'=>'请输入商家具体地址']); ?> 
			
			<div style="display: inline; position: relative; ">上传资质：</div>

						
			<!-- 	<p class="warm">只能上传jpg、jpeg、png类型的图片，大小不能超过2M</p> -->
					<div style="position: relative;">
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
<script>
	//省改变

	$('#finmerchantbase-mer_province').change(function(){
		var province_id = $(this).val();
		$("#finmerchantbase-mer_city").html("<option value=\"0\">请选择市</option>");
        $("#finmerchantbase-mer_area").html("<option value=\"0\">请选择区</option>");
		if(province_id>0){
			getArea(province_id);
		}
	})
	//市改变
	$('#finmerchantbase-mer_city').change(function(){
		var city_id = $(this).val();
		if(city_id>0){
			getDistrict(city_id);
		}
	})
	//获得市
	function getArea(province_id){
		$("#merchant-merchant_district").html("<option value=\"0\">请选择市</option>");
         $.ajax({
            "type"  : "GET",
            "url"   : "<?= URL::to(['meger/seleoption']);?>",
            "data"  : "region_id="+province_id,
			"dataType" : "json",
            success : function(msg) {
               if(msg){	
               	$("#finmerchantbase-mer_city").html('<option value=\"0\">请选择市</option>')
				for(i in msg)
				{

					$("#finmerchantbase-mer_city").append("<option value='"+msg[i].region_id+"'>"+msg[i].region_name+"</option>");
				}
			  }
            }
        });
	}
	//获得区
	function getDistrict(city_id){
         $.ajax({
            "type"  : "GET",
            "url"   : "<?= URL::to(['meger/seleoption']);?>",
            "data"  : "region_id="+city_id,
			"dataType" : "json",
            success : function(msg) {
                if(msg){
                $("#finmerchantbase-mer_area").html("<option value=\"0\">请选择区</option>")
				for(i in msg)
				{
					$("#finmerchantbase-mer_area").append("<option value='"+msg[i].region_id+"'>"+msg[i].region_name+"</option>");
				}
			  }
            }
        });
	}
</script>





</body></html>