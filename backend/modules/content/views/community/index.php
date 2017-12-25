<?php

use yii\helpers\Html;
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CommunitySearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '社区列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="community-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Community', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= TreeGrid::widget([
        'dataProvider' => $dataProvider,
        'keyColumnName' => 'qid',
        'parentColumnName' => 'cqid',
        'parentRootValue' => '0', //first parentId value
        'pluginOptions' => [
            'initialState' => 'collapsed',
        ],
        'columns' => [
           'shequ_name',
            'enable',
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
            				return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['community/view','id'=>$model->qid] , $options);
            			},
            		'update' => function ($url, $model, $key) {
            			$options = [
            					'title' => Yii::t('yii', 'Update'),
            					'aria-label' => Yii::t('yii', 'Update'),
            					'data-pjax' => '0',
            			];
            			return Html::a('<span class="glyphicon glyphicon-pencil"></span>',['community/update','id'=>$model->qid] , $options);
            			},
            		'delete' => function ($url, $model, $key) {
            			$options = [
            					'title' => Yii::t('yii', 'Delete'),
            					'aria-label' => Yii::t('yii', 'Delete'),
            					'data-pjax' => '0',
            			];
            			return Html::a('<span class="glyphicon glyphicon-trash"></span>',['community/delete','id'=>$model->qid] , $options);
            			},
    			]
    		]
        ]     
    ]); ?>
</div>
