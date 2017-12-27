<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CallForBid */

$this->title = 'Create Call For Bid';
$this->params['breadcrumbs'][] = ['label' => '招标采购列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-for-bid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
