<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\AdPosition;
use common\models\Ad;

/* @var $this yii\web\View */
/* @var $model common\models\Ad */

$this->title = $model->ad_name;
$this->params['breadcrumbs'][] = ['label' => '广告列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ad_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ad_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ad_id',
            'ad_name',
            'ad_link',
            'ad_img',
            'start_time:datetime',
            'end_time:datetime',
            'click_count',
            'ad_price',
            ['attribute'=>'enabled','value'=>function($model){
    			return Ad::$enabled_mean[$model->enabled];
    		}],
            'add_time:datetime',
            ['attribute'=>'position_id','value'=>function($model){
    			$position = AdPosition::findOne($model->position_id);
    			return $position->position_name;
    		}],
            'sort_order',
        ],
    ]) ?>

</div>
