<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CustomGoods */

$this->title = 'Create Custom Goods';
$this->params['breadcrumbs'][] = ['label' => 'Custom Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
