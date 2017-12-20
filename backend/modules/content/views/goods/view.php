<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Goods;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */

$this->title = $model->goods_name;
$this->params['breadcrumbs'][] = ['label' => '商品列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

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
            'goods_sn',
            'com_id',
            'goods_name',
            'description:ntext',
            'cate_name',
            'brand',
            'close_reason',
            'add_time',
            'last_update',
            'default_spec',
            ['attribute'=>'default_image'],
            'recommended',
            'price',
            'market_price',
            'state',
            'stock',
            'min_buy',
            'cad_file',
            'bim_file',
            '3d_file',
            'region_1',
            'region_2',
            'sale_region_type',
            'sale_region_descr',
            'danwei',
            'goods_type',
            'discountl',
            'discounth',
            'period',
            'is_green',
        ],
    ]) ?>

</div>
