<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
?>
<div class="t_reg">
		<div class="t_regtit" id="regType">
			<ul>
				<li>
					<a href="<?= Url::to(['user/register']); ?>">学生注册</a>
				</li>
				<li>
					<a href="#" class="col">企业注册</a>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		<!--form-->
		<?php $form = ActiveForm::begin([
		'action' => ['user/compgetpost'],
		'method'=>'post',
		'id'=>'studentRegForm',
		]); ?>
		<!-- <form id="businessForm"> -->
			<!--注册信息-->
			<div class="t_regif">
				<ul>
					<li>
					<?= $form->field($model, 'user_phone',['template'=>'<div class="form-group field-user-user_phone required">&nbsp;&nbsp;<label style="color: red;">*</label>&nbsp;&nbsp;&nbsp;{label}{input}<div style="margin-left:100px;"><font color="red">{error}</font></div></div>'])->textInput(['maxlength' => 11, 'class' =>'in1 validate[required,custom[mobile]]', 'placeholder'=>'请输入手机号']) ?>
					</li>
					<li>
					<?= $form->field($model, 'merchantname',['template'=>'<div class="form-group field-user-user_phone required">&nbsp;&nbsp;<label style="color: red;">*</label>&nbsp;&nbsp;&nbsp;{label}{input}<div style="margin-left:100px;"><font color="red">{error}</font></div></div>'])->textInput(['maxlength' => 11, 'class' =>'in1 validate[required]', 'placeholder'=>'请输入公司名称']) ?>
						
					</li>
			      <li>
				  <span class="wida">
							<label style="color: red;">*</label>
							&nbsp;&nbsp;类型：
						</span>
			      <span class="shangjiangCategroy">
			      <?= $form->field($model, 'businessType',['template'=>'<div><div>{input}</span></div> <div style="margin-left:100px;"><font color="red">{error}</font></div></div>'])->checkboxList(['2'=>'兼职商家','3'=>'消费商家']) ?></span>
			     </li>
					<li>
						<span class="wida">
							<label style="color: red;">*</label>&nbsp;&nbsp;短信验证码：
						</span>
						<span>
							<input name="smsValidCode" id="smsValidCode" value="" type="hidden">
							<input name="smsValCode" id="smsValCode" data-prompt-position="centerRight:125,0" class="in2 validate[required] " placeholder="请输入验证码" type="text">
						</span>
						<span class="mag" style="cursor: pointer;margin-top:-0.1px;" id="smsValidCodeText">获取验证码
						
						</span>
						<div class="clear"></div>
					</li>
					<li>
						<span class="wida" >
							<label style="color: red;" >*</label>&nbsp;&nbsp;设置密码：
						</span>
						<span >
							<input name="password" id="password" class="in1 validate[required,custom[pwd]]" placeholder="请输入密码" type="password">
						</span>
						<div class="clear"></div>
					</li>
					<li>
						<span class="wida">
							<label style="color: red;">*</label>&nbsp;&nbsp;确认密码：
						</span>
						<span>
							<input name="isPassword" id="isPassword" class="in1 validate[condRequired[password],equals[password]]" placeholder="请输入确认密码" type="password">
						</span>
						<div class="clear"></div>
					</li>
					<p>
						<input id="agreement" name="agreement" data-prompt-position="centerRight:250,0" checked="checked" class="validate[required]" type="checkbox">
						我已阅读并同意《
							<a href="http://www.qutaoxue.net/protocol">趣淘学注册协议</a>
						》
					</p>
					<li>
						<span class="wida">&nbsp;</span>
						<span>
							<input name="button" id="studentRegBtn" value="提交注册" class="bt1 " type="button">
						</span>
						<div class="clear"></div>
					</li>
				</ul>
			</div>
			<!--  <div class="t_regify">
				<span>已有账户：</span>
				<span>
					<a href="#">登陆</a>
				</span>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;其他网站绑定登录：</span>
				<span class="qq">
					<a href="#"></a>
				</span>
				<span class="sina">
					<a href="#"></a>
				</span>
				<span class="wx">
					<a href="#"></a>
				</span>
				<span class="zfb">
					<a href="#"></a>
				</span>
			</div>
		</form>-->
		<?php ActiveForm::end(); ?>
	</div>
	<!-- 图片验证码 
 <div class="verificationTip" id="verificationTipID" atr="0" style="display:none">
 	 <h1>请输入图片验证码</h1>
 	  <form action="" method="get">
 	  	<div class="verificationImg">
 	  	  <input placeholder="不区分大小写" id="imgCode1" type="text"> 
 	  	  <img src="%E8%B6%A3%E6%B7%98%E5%AD%A6_files/toRegistVerfyCode.jpg" id="imgverCode1" alt="验证码">
 	  	  </div>
 	  	  <div class="verificationBut">
 	  	  	<button type="button" class="confirmBut but verificationButWidth butBlue" id="registerverificationBut">确认</button>
 	  	  	<button type="button" class="cancelBut but verificationButWidth" id="btnCodeEsc">取消</button>	
 	  	  </div>
 	  </form>
 </div>
图片验证码 -->
	<script type="text/javascript" src='public/js/user.js'></script>