<?php

namespace backend\modules\content\controllers;

use Yii;
use common\models\Community;
use backend\models\search\CommunitySearh;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use common\models\UploadFile;
use yii\web\UploadedFile;

/**
 * CommunityController implements the CRUD actions for Community model.
 */
class CommunityController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Community models.
     * @return mixed
     */
    public function actionIndex()
    {
    	$query = Community::find();
        $dataProvider = new ActiveDataProvider([
        		'query'=>$query,
        		'pagination'=>false
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Community model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Community model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Community();
        
        if ($model->load(Yii::$app->request->post())) {
        	//处理上传图片
        	$file = new UploadFile();
        	$file->uploadFile = UploadedFile::getInstance($model,'shequ_index_face');
        	if(!$file->uploadFile->getHasError()){
        		$file->category = 'community';
        		$file->status  = 'show';
        		if($file->upload()){
        			$model->shequ_index_face = $file->file;
        		}
        	}
        	if($model->save()){
            	return $this->redirect(['view', 'id' => $model->qid]);
        	}
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Community model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
    
        if ($model->load(Yii::$app->request->post())) {
        	//处理上传图片
        	$file = new UploadFile();
        	$file->uploadFile = UploadedFile::getInstance($model,'shequ_index_face');
        	if(!$file->uploadFile->getHasError()){
        		$file->category = 'community';
        		$file->status  = 'show';
        		if($file->upload()){
        			$model->shequ_index_face = $file->file;
        		}
        	}
        	if($model->save()){
            	return $this->redirect(['view', 'id' => $model->qid]);
        	}
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Community model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Community model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Community the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Community::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
