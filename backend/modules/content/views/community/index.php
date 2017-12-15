<?php

use yii\helpers\Html;
use yii\grid\GridView;
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CommunitySearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Communities';
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
            ['class' => 'yii\grid\ActionColumn']
        ]     
    ]); ?>
</div>
