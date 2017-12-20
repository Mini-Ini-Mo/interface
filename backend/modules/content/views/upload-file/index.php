<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\UploadFile;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UploadFileSearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文件列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-file-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Upload File', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            ['attribute'=>'status','value'=>function($model){
				return UploadFile::$status_mean[$model->status];
			}],
            ['attribute'=>'category','value'=>function($model){
				return UploadFile::$category_mean[$model->category];
			}],
            // 'type',
            // 'create_time:datetime',

            [
            	'class' => 'yii\grid\ActionColumn',
            	'template'=>'{view} {update} {delete}'	
    		],
        ],
    ]); ?>
</div>
