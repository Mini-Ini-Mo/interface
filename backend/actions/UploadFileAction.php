<?php
namespace backend\actions;

use yii\base\Action;
use common\models\UploadFile;
use yii\web\UploadedFile;

class UploadFileAction extends Action
{
	public $path;//保存的目录
	public $attribute;//需要获取的属性名
	
	public function run()
	{
		$model = new UploadFile();
		
		if(\Yii::$app->request->isPost){
			$fileObj = UploadedFile::getInstanceByName($this->attribute);
			//目标目录
			if(!is_dir($this->path)){
				@mkdir($this->path);
			}
	
			if($model->validate()){
				//文件名
				$fileName = date('HiiHsHis').$fileObj->getBaseName().'.'.$fileObj->getExtension();
				$filePath = $this->path.$fileName;
				$fileObj->saveAs($filePath);
			}
		}
	}
}