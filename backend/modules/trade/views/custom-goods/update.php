<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CustomGoods */

$this->title = 'Update Custom Goods: ' . $model->goods_id;
$this->params['breadcrumbs'][] = ['label' => 'Custom Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_id, 'url' => ['view', 'id' => $model->goods_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="custom-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
