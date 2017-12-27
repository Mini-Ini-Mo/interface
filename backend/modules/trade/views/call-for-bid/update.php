<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CallForBid */

$this->title = '修改招标: ' . $model->project_id;
$this->params['breadcrumbs'][] = ['label' => '招标采购列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->project_id, 'url' => ['view', 'id' => $model->project_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="call-for-bid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
