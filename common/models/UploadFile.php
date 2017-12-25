<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xcpt_upload_file".
 *
 * @property integer $id
 * @property string $name
 * @property string $file
 * @property string $status
 * @property string $category
 * @property integer $size
 * @property string $type
 * @property integer $create_time
 */
class UploadFile extends \yii\db\ActiveRecord
{
	public $uploadPath = 'E:/WWW/yii1/newwangcai1/img/upload/';
	
	public static $status_mean = ['usable'=>'可用','forbidden'=>'禁用'];
	
	public static $category_mean = [
			'logo'=>'Logo',
			'banner'=>'通栏图片',
			'news'=>'新闻图片',
			'community'=>'社区封面',
			'other'=>'其他'
	];
	
	public $uploadFile;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_upload_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size', 'create_time'], 'integer'],
            [['name', 'file', 'status'], 'string', 'max' => 255],
        	[['uploadFile'],'file','skipOnEmpty' => false, 'extensions' => 'gif, png, jpg, doc, docx ,xlsx,'],
            [['category'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        		'id' => 'ID',
        		'name' => '文件',
        		'file' => '文件路径',
        		'status' => '状态',
        		'category' => '分类',
        		'size' => '大小',
        		'type' => '类型',
        		'create_time' => '添加时间',
        ];
    }
    
    public function upload()
    {
    	$oldFile = $this->file;
    	
    	//文件名
    	$filename = date('YmdHis',time()).'.'.$this->uploadFile->extension;
    	//文件保存路径
    	$path = $this->category.'/'.date('Ym',time()).'/';
    	
    	$this->name = $filename;
    	$this->type = $this->uploadFile->type;
    	$this->size = $this->uploadFile->size;
    	$this->file = $path.$filename;
    	$this->create_time = time();
    	
    	if($this->validate(['uploadFile','name','type','size','file','status','category','type']))
    	{
    		if(!is_dir($this->uploadPath.$path))
    		{
    			@mkdir($this->uploadPath.$path,777,true);
    		}
    		if($this->uploadFile->saveAs($this->uploadPath.$path.$filename) && $this->save(false) && !$this->isNewRecord)
    		{
    			//删除旧图
    			if(file_exists($this->uploadPath.$oldFile)){
    				@unlink($this->uploadPath.$oldFile);
    			}
    		}

    		return true;
    	}
    	return false;
    }
}
