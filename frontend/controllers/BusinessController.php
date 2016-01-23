<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Jobdetails;
use frontend\models\Upload;
use yii\web\UploadedFile;
/**
 * 安全保障
 */
class BusinessController extends Controller
{
		public $enableCsrfValidation = false;
	//发布兼职
    public function actionIndex()
    {
        $model = new Upload();

        if (Yii::$app->request->isPost) {
			$model->file = UploadedFile::getInstance($model,'file');
			
		
			$model->file->saveAs('uploads/'. $model->file->baseName . '.' . $model->file->extension);
			print_r('uploads/'.$model->file->baseName.".".$model->file->extension);
			
		}

        return $this->render('index', ['model' => $model]);
    }
	//兼职列表
	public function actionLists(){
		return $this->render('lists');
	}
	


}
