<?php

use yii\helpers\Html;
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CategorySearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '品类列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= TreeGrid::widget([
	    'dataProvider' => $dataProvider,
	    'keyColumnName' => 'gcate_id',
	    'parentColumnName' => 'parent_id',
	    'parentRootValue' => '0', //first parentId value
	    'pluginOptions' => [
	        'initialState' => 'collapsed',
	    ],
	    'columns' => [
	        'gcate_name',
	        'if_show',
	        'unit',
	         [
            	'class' => 'yii\grid\ActionColumn',
            	'template'=>'{view} {update} {delete}',
            	'buttons'=>[
            		'view' => function ($url, $model, $key) {
            				$options = [
            						'title' => Yii::t('yii', 'View'),
            						'aria-label' => Yii::t('yii', 'View'),
            						'data-pjax' => '0',
            				];
            				return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['category/view','id'=>$model->gcate_id] , $options);
            			},
            		'update' => function ($url, $model, $key) {
            			$options = [
            					'title' => Yii::t('yii', 'Update'),
            					'aria-label' => Yii::t('yii', 'Update'),
            					'data-pjax' => '0',
            			];
            			return Html::a('<span class="glyphicon glyphicon-pencil"></span>',['category/update','id'=>$model->gcate_id] , $options);
            			},
            		'delete' => function ($url, $model, $key) {
            			$options = [
            					'title' => Yii::t('yii', 'Delete'),
            					'aria-label' => Yii::t('yii', 'Delete'),
            					'data-pjax' => '0',
            			];
            			return Html::a('<span class="glyphicon glyphicon-trash"></span>',['category/delete','id'=>$model->gcate_id] , $options);
            			},
    			]
    		]
	    ]     
	]); ?>
</div>
