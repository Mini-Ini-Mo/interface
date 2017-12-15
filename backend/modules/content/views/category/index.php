<?php

use yii\helpers\Html;
use yii\grid\GridView;
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CategorySearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '品类列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <!--h1><?= Html::encode($this->title) ?></h1-->
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
	        ['class' => 'yii\grid\ActionColumn']
	    ]     
	]); ?>
</div>
