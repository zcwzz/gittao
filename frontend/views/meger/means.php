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
<script type="text/javascript" charset="utf-8" src="/public/editor/kindeditor.js"></script>
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
		<!--左边部分-->
		 <?php echo $this->render("_sjleftnav");?>
			<!-- 右边部分 -->
			<div class='mt_ri t_ri'>
			<div class="mt_rli">
				<div class="studentdetailtop  borbot1" >
					<span id="detail1" class="borbotff5400 colorff5400  dis" name="detail1" style="margin:0 ;">
						企业信息
					</span>
					<span id="" class=" dis marleft30" style="margin:0 ;"  name="detail2" >
						上传资料
					</span>
					<span id="" class=" dis marleft30" style="margin:0 ;"  name="detail3" >
						优惠活动
					</span>
				</div>
<div class="martop20 " name="content1">
				<?php $form = ActiveForm::begin(
						[
							'action' => ['meger/selmeans'],
							'method' => 'post',
							  
						]
					); 
				?>
				<!-- 	<form class="form"> -->
				<?= $form->field($model, 'mer_name',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入商家名字']) ?>
				<?= $form->field($model,'mer_contact',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft6em','placeholder'=>'请输入联系人']); ?>
				<?= $form->field($model,'mer_conphone',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft5em','placeholder'=>'请输入联系电话'])?>
				<?= $form->field($model,'mer_position',['template'=>'<div class="tr height40 padleft2em" ><div class="first" style="float:left">{label}{input}</div>{error}</div>'])->textInput(['class'=>'wid200 marleft7em','placeholder'=>'请输入职位'])?>
				
			<div class="tr height80 padleft2em">
				<div class="dis" style="float:left;">
					企业地址
				</div>

			<?= $form->field($model, 'mer_province',['template'=>'<div class="marleft5em" style="float:left;margin-right:10px;" >{label}{input}</div>'])->dropDownList(ArrayHelper::map($province,'region_id','region_name'),['class'=>'select_region','prompt'=>'请选择省']) ?>

			<?= $form->field($model, 'mer_city',['template'=>'<div class=""  style="float:left;margin-right:10px;">{label}{input}</div>'])->dropDownList(ArrayHelper::map($city,'region_id','region_name'),['class'=>'select_region','prompt'=>'请选择市']) ?>


			<?= $form->field($model, 'mer_area',['template'=>'<div class="" style="float:left;margin-right:10px;" >{label}{input}</div>'])->dropDownList(ArrayHelper::map($area,'region_id','region_name'),['class'=>'select_region','prompt'=>'请选择区']) ?>
			
			<?= $form->field($model,'mer_address',['template'=>'<div class="" style="float:left;" >{label}{input}</div>{error}'])->textInput(['class'=>'wid365','placeholder'=>'请输入商家具体地址']); ?> 
			</div>

			<div class="tr height40 padleft2em">
				<div style="float:left;">
					行业类型
				</div>
				<?= $form->field($model,'ind_type',['template'=>'<div class="marleft5em" style="float:left;" >{label}{input}</div>'])->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中'],['prompt'=>'请选择类型']);?>
				<?= $form->field($model,'ind_type',['template'=>'<div class="marleft1em" style="float:left;" >{label}{input}</div>'])->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中'],['prompt'=>'请选择类型']);?>
			</div>
			<?= $form->field($model,'mer_introduce',['template'=>'<div class="tr  padleft2em martop10 marb10">{label}{input}</div><div class="q_content" style="height:30px;margin-left:30px">{error}</div>'])->textarea(['id'=>'q_content','style'=>'width:700px;height:200px;visibility:hidden;'])?>

			<div class="wid100 height30 back textcenter white marleft30">下一步</div>
			</div>

			<div name="content2" style="display: none;">
			<div class="tr" style="padding: 20px 0 20px 2em;">
				<div class="dis marright20" style="width: 4em;position: relative;top:-2em">
				企业简称上传资质
				</div>
				<div class="uploadimg btn" style="background: url(/public/images/qiyelogo.png);"></div>
				<div class="uploadimg btn" style="background: url(/public/images/zhizhao.png);"></div>
				<div class="uploadimg btn" style="background: url(/public/images/shuiwu.png);"></div>
				<div class="uploadimg btn" style="background: url(/public/images/jigou.jpg);"></div>
				<div class="martop20 marleft6em">只能上传jpg、jpeg、png类型的图片，大小不能超过2M</div>
				<div id="ossfile">你的浏览器不支持flash,Silverlight或者HTML5！</div>
				<pre id="console"></pre>
			</div>
			<div class="tr" style="padding: 20px 0 20px 2em;">
				<div class="dis marright20" style="width: 5em;position: relative;top:-2em">
					上传身份证
				</div>
				<div class="uploadimg" style="background: url(/public/images/zhenmian.png) ;background-size:120px 80px" >
				</div>
				<div class="uploadimg" style="background: url(/public/images/fanmian.jpg);"></div>
				<div class="martop20 marleft7em">只能上传jpg、jpeg、png类型的图片，大小不能超过2M</div>
			</div>
			<div class="tr" style="padding: 20px 0 20px 2em;">
				<div class="dis marright20" style="width: 4em;position: relative;top:-2em">
				商家图片
				</div>
				<div class="uploadimg qiyimg btn" ></div>
				<div class="uploadimg qiyimganother btn" ></div>
				<div class="uploadimg qiyimganother btn" ></div>
				<div class="uploadimg qiyimganother btn"></div>
				<div>
					<span class="dis marleft120 ">主图</span>
					<span class="dis marleft100">图二</span>
					<span class="dis marleft80">图三</span>
					<span class="dis marleft100">图四</span>
				</div>
				<div class="martop20 marleft6em">只能上传jpg、jpeg、png类型的图片，大小不能超过2M</div>
			</div>
			<div class="wid100 height30"><?= Html::submitButton('提交', ['class'=>'wid100 height30 back textcenter white marleft30','name' =>'submit-button',]) ?></div> 
			<?php
				ActiveForm::end();
			?>
		</div>
		<div name="content3" style="display: none;">
			 <table class="date " cellpadding="0" cellspacing="0" width="960px" >
				<thead>
					<tr style="background: #E5E5E4; border: 0;">
						<th>序号</th>
						<th >时间</th>
						<th>优惠</th>
						<th >添加时间</th>
					</tr>
					</thead>
					<tr>
						<td>2</td>
						<td>2015-12-06至2015-12-30</td>
						<td>满<span class="red">100</span>减12</td>
						<td>2015-12-05 16:00:00</td>
					</tr>
			</table>
			<div class="tr height40 padleft2em">
				时间<input type="text" class="marleft7em  marright1em"/>
				至<input type="text" class="marleft1em"/>
			</div>
			<div class="tr height40 padleft2em">
			优惠<input type="radio" checked="checked" class="marleft7em  marright1em" name="youhui"/>
			满减<input type="radio" name="youhui" class="marleft1em marright1em"/>折扣
			</div>
			<div class="tr height40 padleft2em">
				<span name="manjian">
				每满<span class="red">100</span>
				减<input type="text" class="marleft1em" /></span>
				<span name="zhekou" style="display: none;">
				<input type="text" />%(可填1-100%兑付时按填写的折扣额度结算)</span>
			</div>
			<div class="wid100 height30 back textcenter white marleft30">保存</div>
		</div>
	</div>
</div>
</div>
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
</script>
<script type="text/javascript">
    KE.show({
        id : 'q_content' //TEXTAREA输入框的ID
    });
</script>
<script>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[id="merchant-merchant_desc"]', {
			resizeType : 1,
			allowPreviewEmoticons : false,
			allowImageUpload : false,
			items : [
				'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'image', 'link'],
				allowFileManager : true,
			    afterBlur: function(){
					this.sync();
					var val = editor.text()
					if(val == ''){
						$(".q_content").append('<font color="red">此项不能为空</font>')
					}else{
						$(".q_content").children().html('')
					}

				}
		});
	});
</script>
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