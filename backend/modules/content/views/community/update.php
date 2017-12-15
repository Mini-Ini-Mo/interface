<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Community */

$this->title = 'Update Community: ' . $model->qid;
$this->params['breadcrumbs'][] = ['label' => 'Communities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->qid, 'url' => ['view', 'id' => $model->qid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="community-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
