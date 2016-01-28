<?php
namespace frontend\models;

use yii\web\UploadedFile;

/**
 * UploadForm is the model behind the upload form.
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $file;
	
    public function rules()
    {
        return [
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpeg,jpg'],
        ];
    }
}
