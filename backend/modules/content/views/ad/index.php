<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\AdPosition;
use yii\helpers\ArrayHelper;
use common\models\Ad;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\AdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '广告列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ad_name',
        	['attribute'=>'position_id','value'=>function($model){
    			$position = AdPosition::findOne($model->position_id);
    			return $position->position_name;
    		}],
        	['attribute'=>'enabled','value'=>function($model){
    			return Ad::$enabled_mean[$model->enabled];
    		}],
            //'start_time:datetime',
            // 'end_time:datetime',
            // 'click_count',
            // 'ad_price',
            // 'add_time:datetime',
            // 'sort_order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
