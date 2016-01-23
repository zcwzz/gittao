<?php
namespace frontend\models;
use Yii;
use \yii\db\ActiveRecord;
use yii\data\Pagination;
use yii\web\UploadedFile;
class Jobdetails extends \yii\db\ActiveRecord{
	public static function tableName(){
		return 'fin_job_details';
	}
	public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload()
    {

        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
	
	
}