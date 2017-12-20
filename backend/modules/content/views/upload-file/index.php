<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\UploadFile;
use nerburish\masonryview\MasonryView;
use yii\base\Widget;

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
    
    <?= \nerburish\masonryview\MasonryView::widget([
    		'dataProvider' => $dataProvider,
    		'itemView' => '_item',
    		'clientOptions' => [
    				'gutterWidth' => 15,
    		],
    		'cssFile' => [
    				//"@web/css/masonry-demo.css"
    		]
    ])?>
</div>
<style>
/* ---- grid ---- */
.grid {
  box-sizing: border-box;
}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */
.grid-item {
  width: 18%;
  padding: 10px;  
  margin: 10px 3px;
  float: left;
  background: #e4e4e4;
  border-radius: 5px;
}
</style>