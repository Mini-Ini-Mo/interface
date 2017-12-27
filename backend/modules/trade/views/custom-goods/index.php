<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CustomGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Custom Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom-goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Custom Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'goods_id',
            'goods_name',
            'goods_sn',
            'default_image',
            'thumb_path',
            // 'cate_id1',
            // 'cate_id2',
            // 'cate_id',
            // 'cate_name',
            // 'brand_id',
            // 'brand_name',
            // 'unit',
            // 'market_price',
            // 'hangye_price',
            // 'goods_model',
            // 'ad_words',
            // 'number_low',
            // 'price_desc',
            // 'duibiao',
            // 'yufukuan',
            // 'daohuokuan',
            // 'wanchengkuan',
            // 'jiesuankuan',
            // 'baozhengjin',
            // 'params:ntext',
            // 'fuwushang:ntext',
            // 'zhanluekehu:ntext',
            // 'description:ntext',
            // 'recommend_to_pc',
            // 'recommend_to_app',
            // 'status',
            // 'user_id',
            // 'sort',
            // 'is_delete',
            // 'pc_view_num',
            // 'app_view_num',
            // 'total_view_num',
            // 'add_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
