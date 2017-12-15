<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Company;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '地产商列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <!--h1><?= Html::encode($this->title) ?></h1-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo Html::a('Create Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'com_name',
           
            ['label'=>'审核状态','attribute'=>'com_verify_status','value'=>function($model){return Company::$status[$model->com_verify_status];}],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
