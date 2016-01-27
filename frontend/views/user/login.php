<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */


use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

?>
<div class="t_land">
    <div class="t_landi">
        <h1>账号登录</h1>
        
        <!-- <form id="loginForm"> -->
		<?php $form = ActiveForm::begin([
		'action' => ['user/loginpro'],
		'method'=>'post',
		'id'=>'loginForm',
		/*'fieldConfig' => ['template'=>'<span class="wida"><label style="color:red;">*</label>&nbsp;&nbsp;{label}</span><span>{input}</span><font color="red">{error}</font><div class="clear"></div>']*/
		]); ?>
            <ul>
                <li>
					<?php echo $form->field($model, 'user',['template'=>'<span class="wida">{label}</span><span>{input}</span><div class="clear">{error}</div>'])->textInput(['maxlength' => 11,'class'=>'in1 validate[required]','placeholder'=>'请输入账号']) ?>
                </li>
                <li>
				<?php echo $form->field($model, 'Password',['template'=>'<span class="wida">{label}</span><span>{input}</span><div class="clear">{error}</div>'])->passwordInput(['maxlength' => 11,'class'=>'in1 validate[required]','placeholder'=>'请输入密码']) ?>
                </li>
                <li>
                    <input type="submit" id="loginBtn" class="bt1" value="登  录"  />
                </li>
                <li style="height: 40px;">
                    <span>
                        <a href="/main/findPasswd">忘记密码</a>
                    </span>
                    <b><a href="/main/regUser">快速注册</a></b>
                    <div class="clear"></div>
                </li>
        
            </ul>
       <?php ActiveForm::end(); ?>
        <div class="clear"></div>
    </div>
</div>