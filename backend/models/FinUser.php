<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fin_user".
 *
 * @property integer $user_id
 * @property string $user_phone
 * @property string $user_password
 * @property integer $user_type
 * @property integer $user_addtime
 * @property integer $user_lastlogin
 * @property string $user_lastip
 * @property integer $user_status
 */
class FinUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $smsValCode;
	public $isPassword;
	public $verifyCode;
	public $merchantname;//公司名称
	public $businessType;//公司类别
    public $user_pwd;
    public static function tableName()
    {
        return 'fin_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['smsValCode','businessType','merchantname','user_pwd','verifyCode','isPassword', 'user_phone', 'user_password' ], 'required','message'=>'此处不能为空'],
            [['user_id', 'user_type', 'user_addtime', 'user_lastlogin', 'user_status'], 'integer'],
            [['user_phone'], 'string', 'max' => 11],
            [['user_password'], 'string', 'max' => 32],
            [['user_lastip'], 'string', 'max' => 15],
			['isPassword', 'compare', 'compareAttribute' => 'user_password', 'message' => '两次密码输入不一致'],
			[['user_phone'], 'match','pattern' => '/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/i','message'=>'请输入正确的手机号码'],
			//['verifyCode', 'required']
            [['verifyCode'], 'captcha','captchaAction'=>'site/captcha','message'=>"验证码错误"]
        ];
    }
    /*
    *修改密码
    */
    // public function Userupdpwd($user_id){
    //     // return $this->find()->where(['user_id'=>$user_id])->asarray()->one();
    //     $model = new FinUser;
    //     $arr = $model->
    // }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_phone' => '手机号码:',
            'user_password' => '设置密码：',
            'user_type' => 'User Type',
            'user_addtime' => 'User Addtime',
            'user_lastlogin' => 'User Lastlogin',
            'user_lastip' => 'User Lastip',
            'user_status' => 'User Status',
			'smsValCode' =>'短信验证码',
			'isPassword'=>'确认密码：',
			'verifyCode'=>'验证码',
			'merchantname'=>'公司名称',
			'businessType'=>'类别    ：',
            'user_pwd' =>'输入旧密码',
			];
    }
}
