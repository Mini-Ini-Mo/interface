<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CustomGoods */

$this->title = $model->goods_id;
$this->params['breadcrumbs'][] = ['label' => 'Custom Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom-goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->goods_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->goods_id], [
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
            'goods_id',
            'goods_name',
            'goods_sn',
            'default_image',
            'thumb_path',
            'cate_id1',
            'cate_id2',
            'cate_id',
            'cate_name',
            'brand_id',
            'brand_name',
            'unit',
            'market_price',
            'hangye_price',
            'goods_model',
            'ad_words',
            'number_low',
            'price_desc',
            'duibiao',
            'yufukuan',
            'daohuokuan',
            'wanchengkuan',
            'jiesuankuan',
            'baozhengjin',
            'params:ntext',
            'fuwushang:ntext',
            'zhanluekehu:ntext',
            'description:ntext',
            'recommend_to_pc',
            'recommend_to_app',
            'status',
            'user_id',
            'sort',
            'is_delete',
            'pc_view_num',
            'app_view_num',
            'total_view_num',
            'add_time:datetime',
        ],
    ]) ?>

</div>
