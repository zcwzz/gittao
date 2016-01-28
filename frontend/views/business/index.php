<?php 
	use yii\widgets\ActiveForm;
?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="/public/css/comm.css">
<link rel="stylesheet" href="/public/css/sty.css">
<link rel="stylesheet" href="/public/css/shop.css">

    <link rel="stylesheet" href="/public/css/skin_v2.css" />


    <div class="t_min t_tit">当前位置：<a href="http://www.qutaoxue.net/">首页</a> &gt; 我的趣淘学</div>
    <!--我的趣淘学-->
    <div class="t_min">
        <div class="mt_ri_1">

              <?php echo $this->render('_hader');?>
        </div>
        <?php echo $this->render('_sjleftnav');?>
        <div class="mt_ri t_ri">
            <div class="mt_rli">
                <div class="right">
                   <div id="" class="topdiv">
			<p id="" class="topdivtext">
				发布兼职
			</p>
		</div>

	<!--	<form method="post" action="index.php?r=business/position" class="frm" enctype="multipart/form-data">-->
	<?php $form = ActiveForm::begin([
	'options' => ['enctype' => 'multipart/form-data','class' => 'frm'],
	'action' => ['index'],
	'method'=>'post',
	]) ?>

			<h3>兼职详情</h3>
			<span id="">
				<m>*</m><label>兼职名称：</label>
				<input name="name"  class="validate[required,maxSize[30]]" placeholder="请输入兼职名称" type="text">
			</span>
			<span id="">
				<m>*</m><label>兼职类别：</label>
		    <select name="workType" class="margleft6 validate[required]" placeholder="请输入兼职类别">
			<option selected="selected" value="">请选择兼职类型</option>
			<?php foreach($part as $v){ ?>
			<option atr="" value="<?php echo $v['part_id'] ?>"><?php echo $v['part_name'] ?></option>
			<?php } ?>
			
	
			</select>
			</span>
			<span id="">
				<m>*</m><label>招聘人数：</label>
				<input name="total" id="" class="validate[required,custom[integer],min[1]]" placeholder="请输入招聘人数" type="text">
			</span>
			<span id=" ">
				<label class="floleft margleft5">上传图片：</label>
				
					    <?= $form->field($model, 'file')->fileInput() ?>
			</span>
			<span id="">
				<m>*</m><label>工资待遇：</label><input name="salary" id="salary" data-prompt-position="topRight" class="validate[required,custom[number]]" placeholder="请输入工资待遇" type="text">
			
			<select id="payUnit" name="payUnit">
			
		
			<option selected="selected" value="元/天">元/天</option><option value="元/小时">元/小时</option><option value="元/单">元/单</option><option value="元/月">元/月</option><option value="元/周">元/周</option><option value="元/次">元/次</option><option value="元/个">元/个</option><option value="面议">面议</option></select>
			</span>
			<span id="">
				<m>*</m><label>结算方式：</label>
		 <select name="payStyle" class="margleft6">
		<option selected="selected" value="1">当天结算</option>
          <option value="2">周末结算</option>
          <option value="3">月末结算</option>
          <option value="4">完工结算</option>
				</select>
			</span>
			<span style="margin-left: 4em;">标签： 
			<nav class="dis">
			<div class="dis background wid100 textcenter height30 shou">日结兼职</div>
			<div class="dis background wid100 textcenter height30 shou">周末兼职</div>
			<div class="dis background wid100 textcenter height30 shou">实习岗位</div>
			<div class="dis background wid100 textcenter height30 shou">长期兼职</div>
			<div class="dis background wid100 textcenter height30 shou">暑假兼职</div>
			<div class="dis background wid100 textcenter height30 shou">寒假兼职</div>
			</nav>
			</span>
			<span id="">
				<m>*</m><label>截止日期：</label>
				<input name="applyEnd" id="applyEnd" class="Wdate validate[required]" onfocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'})" placeholder="请输入报名截止日期" type="text">
			</span>
			<span id="">
				<m>*</m><label>兼职日期：</label>
				<input name="workBegin" id="workBegin" data-prompt-position="topRight" class="Wdate validate[required]" onfocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" placeholder="请输入兼职日期" type="text">
				<input name="workEnd" id="workEnd" class="Wdate validate[required]" onfocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd', minDate:'#F{$dp.$D(\'workBegin\')}'})" placeholder="请输入兼职日期" type="text">
			</span>

		<div class="con" id="begin"> 
      	<ul class="conul">
      		<li>00:00</li><li>01:00</li><li>02:00</li><li>03:00</li>
     
      		<li>04:00</li><li>05:00</li><li>06:00</li><li>07:00</li>
      
      		<li>08:00</li><li>09:00</li><li>10:00</li><li>11:00</li>
     
      		<li>12:00</li><li>13:00</li><li>14:00</li><li>15:00</li>
    
      		<li>16:00</li><li>17:00</li><li>18:00</li><li>19:00</li>
      
      		<li>20:00</li><li>21:00</li><li>22:00</li><li>23:00</li>
      	</ul>
 </div>
 	<div class="con" id="end"> 
      	<ul class="conul">
      		<li>00:00</li><li>01:00</li><li>02:00</li><li>03:00</li>
     
      		<li>04:00</li><li>05:00</li><li>06:00</li><li>07:00</li>
      
      		<li>08:00</li><li>09:00</li><li>10:00</li><li>11:00</li>
     
      		<li>12:00</li><li>13:00</li><li>14:00</li><li>15:00</li>
    
      		<li>16:00</li><li>17:00</li><li>18:00</li><li>19:00</li>
      
      		<li>20:00</li><li>21:00</li><li>22:00</li><li>23:00</li>
      	</ul>
 </div>
			<span id="">
				<m>*</m><label>工作时段：</label>
				<input name="workTimeHourBegin" id="workTimeHourBegin" data-prompt-position="topRight" onfocus="GLOBAL.pagebase.workTimeShowBegin()" class="validate[required]" placeholder="请输入工作时段" type="text">
				<input name="workTimeHourEnd" id="workTimeHourEnd" class="validate[required]" placeholder="请输入工作时段" onfocus="GLOBAL.pagebase.workTimeShowEnd()" type="text">
			</span>
			<span id="" class="margleft45">
				<m>*</m><label>提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;成：</label>
				<select name="isDeduct" class="margleft6" id="isDeduct">
			<option selected="selected" value="0">无提成</option>
			<option value="1">有提成</option>
				</select>
			</span>
			<span id="deductTypeNameSpan" style="display:none">
				<m>*</m><label>提成内容：</label>
				<textarea name="deductTypeName" id="deductTypeName" class="w100h25 validate[required,maxSize[200] ]  "></textarea>
		
			</span>
			<span id="">
				<label class="margleft6">性别要求：</label>
				<select name="sex" id="sex" class="margleft6 validate[required]">
			<option selected="selected" value="0">不限</option>
			<option value="1">男</option>
			<option value="2">女</option>
				</select>
			</span>
			<span id="">
				<label class="margleft6">身高要求：</label>
				<select name="height" class="margleft6  validate[required]" id="height">
			<option selected="selected" value="0">不限</option>
			<option value="1">160cm以上</option>
			<option value="2">165cm以上</option>
			<option value="3">170cm以上</option>
			<option value="4">175cm以上</option>
			<option value="5">180cm以上</option>
				</select>
			</span>
			<span id="" style="">
				<m>*</m><label>工作内容：</label><textarea id="workInfo" name="workInfo" rows="" cols="" class="margleft12  validate[required,maxSize[600]] " placeholder="请输入工作内容"></textarea>
			</span>
			<span id="">
				<label class="margleft6">工作要求：</label><textarea name="jobDetails" rows="" cols="" class="margleft12  validate[required,maxSize[600]]" value="333" placeholder="请输入工作要求"></textarea>
			</span>
			<h3>联系方式</h3>
			<span id="">
				<m class="margleft12">*</m><label>联系人：</label><input name="contact" id="contact" class=" validate[required,maxSize[30]]" placeholder="请输入联系人" type="text">
			</span>
			<span id="">
				<m>*</m><label>联系电话：</label><input name="contactTel" id="contactTel" class=" validate[required,maxSize[100]] " placeholder="请输入联系电话" type="text">
			</span>
			<h3>工作地点</h3>
			<span id="">
				<m>*</m><label>工作地点：</label>
				<select name="province" id="province" data-prompt-position="topRight" class="validate[required]"> <option selected="selected" value="">省</option>
				<?php foreach($reg as $k=>$v){ ?>
				<option value="<?php echo $v['region_id'] ?>" class="one"><?php echo $v['region_name'] ?></option>
				<?php } ?>
				</select>
				<select name="city" id="two" data-prompt-position="topRight" class="validate[required]"><option selected="selected" value="">城市</option></select>
				<select name="area" id="area" class="validate[required]"><option selected="selected" value="">区/县</option></select>
			</span>
			<span class="pd55">
			<div id="r-result">请输入:<input type="text" id="suggestId" size="20" name="address" value="百度" style="width:150px;" /></div>
	<div id="searchResultPanel" style="border:1px solid #C0C0C0;width:150px;height:auto; display:none;"></div>
			</span>
	
			<span class="pd55">
				<div id="l-map"></div>

			</span>
			<span class="pd55">
				<input id="btnPublish" value="发布兼职" class="fabujianzhisubmit" type="submit">
			</span>																																										
			<span id="" class="margleft88">
				<m>温馨提示：岗位信息发布后将无法修改，请在信息核实无误后再发布！</m>
			</span>
			<?php ActiveForm::end() ?>
			<!--</form> -->
                </div>
            </div>
        </div>

    </div>
 
    
<style type="text/css">
		p{cursor:pointer}
		
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
		#l-map{height:300px;width:100%;}
		#r-result{width:100%;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=S3k7xZ2G5izXfSyvNgFoxB7h"></script>


	

<script type="text/javascript">
	// 百度地图API功能
	function G(id) {
		return document.getElementById(id);
	}

	var map = new BMap.Map("l-map");
	map.centerAndZoom("北京",12);                   // 初始化地图,设置城市和地图级别。

	var ac = new BMap.Autocomplete(    //建立一个自动完成的对象
		{"input" : "suggestId"
		,"location" : map
	});

	ac.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
	var str = "";
		var _value = e.fromitem.value;
		var value = "";
		if (e.fromitem.index > -1) {
			value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
		}    
		str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;
		
		value = "";
		if (e.toitem.index > -1) {
			_value = e.toitem.value;
			value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
		}    
		str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
		G("searchResultPanel").innerHTML = str;
	});

	var myValue;
	ac.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
	var _value = e.item.value;
		myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
		G("searchResultPanel").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;
		
		setPlace();
	});

	function setPlace(){
		map.clearOverlays();    //清除地图上所有覆盖物
		function myFun(){
			var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
			map.centerAndZoom(pp, 18);
			map.addOverlay(new BMap.Marker(pp));    //添加标注
		}
		var local = new BMap.LocalSearch(map, { //智能搜索
		  onSearchComplete: myFun
		});
		local.search(myValue);
	}
</script>
<script type="text/javascript">
	$(".one").on('click',function(){ 
		var id=$(this).val(); 
		if(id==0){
			$(".two").html("<option value=0>请选择...");
			die;
		}
		$.ajax({
			 type:"POST",
			url:"city",
			data: "id="+id,
			dataType:"json",
			success: function(obj){
				var str="";
				var i=0;
				for(i;i<obj.length;i++){
					str+="<option value="+obj[i]['region_id']+" onclick='sara("+obj[i]['region_id']+")'>"+obj[i]['region_name']+"</option>";
				}
				$("#two").html(str);
			}
		});
	}) 
	function sara(id){
	
		$.ajax({
			 type:"POST",
			url:"city",
			data: "id="+id,
			dataType:"json",
			success: function(obj){
				var str="";
				var i=0;
				for(i;i<obj.length;i++){
					str+="<option >"+obj[i]['region_name']+"</option>";
				}
				$("#area").html(str);
			}
		});
	}
</script>
