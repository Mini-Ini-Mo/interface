<?php

namespace backend\modules\content\controllers;

use Yii;
use common\models\Ad;
use backend\models\search\AdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\UploadFile;
use yii\web\UploadedFile;

/**
 * AdController implements the CRUD actions for Ad model.
 */
class AdController extends Controller
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
     * Lists all Ad models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ad model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Ad model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ad();

        if ($model->load(Yii::$app->request->post())) {
        	$file = new UploadFile();
        	$file->uploadFile = UploadedFile::getInstance($model,'ad_img');
        	if($file->uploadFile && !$file->uploadFile->getHasError()){
        		$file->category = 'ad';
        		$file->status  = 'show';
        		if($file->upload()){
        			$model->ad_img = $file->file;
        		}
        	}
        	if($model->save()){
            	return $this->redirect(['view', 'id' => $model->ad_id]);
        	}
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ad model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
        	$file = new UploadFile();
        	$file->uploadFile = UploadedFile::getInstance($model,'ad_img');
        	if(!$file->uploadFile->getHasError()){
        		$file->category = 'ad';
        		$file->status  = 'show';
        		if($file->upload()){
        			$model->ad_img = $file->file;
        		}
        	}
        	if($model->save()){
            	return $this->redirect(['view', 'id' => $model->ad_id]);
        	}
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ad model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ad model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ad the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ad::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}