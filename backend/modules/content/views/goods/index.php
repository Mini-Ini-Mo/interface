<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Goods;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\GoodsSearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '商品列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--p>
        <?= Html::a('Create Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'goods_name',
            'cate_name',
            'brand',
        	'danwei',
            ['attribute'=>'closed','value'=>function($model){
    			return Goods::$closed_mean[$model->closed];
    		}],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
