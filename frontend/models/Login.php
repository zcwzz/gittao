<?php

namespace frontend\models;

use Yii;
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $user;
	public $Password;
    public static function tableName()
    {
        return 'fin_user';
    }
    public function rules()
    {
        return [
            [['user','Password'], 'required','message'=>'当前项不能为空'],
			[['user'], 'match','pattern' => '/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/i','message'=>'请输入正确的手机号码'],
            [['verifyCode'], 'captcha','captchaAction'=>'site/captcha','message'=>"验证码错误"]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user' => '账  号：',
            'Password' => '登录密码：'
			];
    }
}
