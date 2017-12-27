<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CallForBidSearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '招标采购列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-for-bid-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Call For Bid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
        	//'pm_id',
        	'shop_id',
        	'project_name',
            //'project_id',
            //'project_sn',
            //'shop_name',
            //'user_id',
            // 'shequ_id',
            // 'lxr',
            // 'lxr_p',
            // 'default_logo',
            // 'price',
            // 'region_id',
            // 'region_name',
            // 'area_id',
            // 'area_name',
            // 'area_addr',
            // 'cate_id1',
            // 'cate_id2',
            // 'cate_id',
            'cate_name',
            // 'projects:ntext',
            // 'requirement:ntext',
            // 'description:ntext',
            // 'baoming_time:datetime',
            // 'toubiao_time:datetime',
            // 'kaibiao_time',
            // 'add_time:datetime',
            // 'zb_status',
            // 'status',
            // 'tj_status',
            // 'if_pass',
            // 'if_close',
            // 'xm_name',
            // 'open_way',
            // 'source',
            // 'pricing',
            // 'enable',

            [
            	'class' => 'yii\grid\ActionColumn',
            	'template'=>'{view} {delete}',
        	],
        ],
    ]); ?>
</div>
