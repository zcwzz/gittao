<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
?>
<style type="text/css">
	#finuser-verifycode{
  border: 1px solid #ccc;
  color: #999;
  font-size: 12px;
  height: 36px;
  padding: 0 5px;
  width: 130px;

 
}
</style>
<script type="text/javascript" src='public/js/user.js'></script>
<div id='bbba'>shsshshsh</div>
<div class="t_reg">
	<div class="t_regtit" id="regType">
		<ul>
			<li>
				<a href="#" class="col">学生注册</a>
			</li>
			<li>
				<a href="<?= Url::to(['user/enterprise']); ?>">企业注册</a>
			</li>
		</ul>
		<div class="clear"></div>
	</div>
	<?php $form = ActiveForm::begin([
		'action' => ['user/getpost'],
		'method'=>'post',
		'id'=>'studentRegForm',
		/*'fieldConfig' => ['template'=>'<span class="wida"><label style="color:red;">*</label>&nbsp;&nbsp;{label}</span><span>{input}</span><font color="red">{error}</font><div class="clear"></div>']*/
		]); ?>
	<!--<form id="studentRegForm">-->

		<!--注册信息-->
		<div class="t_regif">
			<ul>	
				<li>
				
					<?= $form->field($model, 'user_phone',['template'=>'<div class="form-group field-user-user_phone required">&nbsp;&nbsp;<label style="color: red;">*</label>&nbsp;&nbsp;&nbsp;{label}{input}<div style="margin-left:100px;"><font color="red">{error}</font></div></div>'])->textInput(['maxlength' => 11, 'class' =>'in1 validate[required,custom[mobile]]', 'placeholder'=>'请输入手机号']) ?>
				</li>
					<!--用户类型-->
		
			<?= Html::hiddenInput('user_type','1', ['value'=>'1']) ?>
			<!--<input name="phone" id="phone" class="in1 validate[required,custom[mobile]] " placeholder="请输入手机号码" type="text">-->
					
				<li>
					
						<?= $form->field($model, 'smsValCode',['template'=>'<div class="form-group field-studentregister-smsValidCode" style="float:left;"><label style="color: red;">*</label>&nbsp;{label}{input}<div style="margin-left:100px;"><font color="red">{error}</font></div>'])->textInput(['maxlength' => 11, 'class' =>'in2 validate[required]', 'placeholder'=>'请输入验证码']) ?>
						<span class="mag" style="margin-top:1px;" id="smsValidCodeText" atr="0">获取验证码</span>
					
				</li>
					<li>			
					
				<?= $form->field($model, 'verifyCode', ['template'=>'<div class="form-group field-user-user_phone required">&nbsp;&nbsp;<label style="color: red;">*</label>&nbsp;&nbsp;&nbsp;{label}{input}<div style="margin-left:100px;"><font color="red">{error}</font></div></div>',
					'options' => ['class' => 'form-group form-group-lg']])->widget(Captcha::className(),[
				   'template' => "{input}{image}",
				   'imageOptions' => ['alt' => '验证码'],
				   'captchaAction' => 'site/captcha',
				]); ?>
				
					
				</li>
				<li></li>
				<li>
				
						<?= $form->field($model, 'user_password',['template'=>'<div class="form-group field-studentregister-user_password">&nbsp;<label style="color: red;">*</label>&nbsp;&nbsp;&nbsp;{label}{input}<div style="margin-left:100px;"><font color="red">{error}</font></div></div>'])->passwordInput(['maxlength' => 20, 'class' =>'in1 validate[required,custom[pwd]]', 'placeholder'=>'请输入密码']) ?>
				</li>
				
				<li>
						<?= $form->field($model, 'isPassword',['template'=>'<div class="form-group field-studentregister-confirm_password">&nbsp;<label style="color: red;">*</label>&nbsp;&nbsp;&nbsp;{label}{input}<div style="margin-left:100px;"><font color="red">{error}</font></div></div>'])->passwordInput(['maxlength' => 20, 'class' =>'in1 validate[required,custom[pwd]]', 'placeholder'=>'请输入密码']) ?>
				</li>
				<p>
					<input id="agreement" name="agreement" data-prompt-position="centerRight:250,0"  class="validate[required]" type="checkbox">
					我已阅读并同意《
					<a href="http://www.qutaoxue.net/protocol">趣玩注册协议</a>
					》
				</p>
			
				<li>

					<span class="wida">&nbsp;</span>
					<span>
						<input name="button" id="studentRegBtn" value="下一步" class="bt1" type="submit"  disabled="disabled">
						
					</span>
					<div class="clear"></div>
				</li>
			</ul>
		</div>
		<?php ActiveForm::end(); ?>
	<!--</form>-->
</div>
<!--  注册学生成功弹窗

<!-- 图片验证码 -->
 <div class="verificationTip" id="verificationTipID" atr="0" style="display:none">
 	 <h1>请输入图片验证码</h1>
 	  <form action="" method="get">
 	  	<div class="verificationImg">
 	  	  <input placeholder="不区分大小写" id="imgCode1" type="text"> 
 	  	  <img src="#" id="imgverCode1" alt="验证码">
 	  	  </div>
 	  	  <div class="verificationBut">
 	  	  	<button type="button" class="confirmBut but verificationButWidth butBlue" id="registerverificationBut">确认</button>
 	  	  	<button type="button" class="cancelBut but verificationButWidth" id="btnCodeEsc">取消</button>	
 	  	  </div>
 	  </form>
 </div>
<!-- 图片验证码 -->


