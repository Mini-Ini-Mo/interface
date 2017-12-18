<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Community */

$this->title = '更新社区: ' . $model->shequ_name;
$this->params['breadcrumbs'][] = ['label' => '更新社区', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shequ_name, 'url' => ['view', 'id' => $model->qid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="community-update">

    <!--h1><?= Html::encode($this->title) ?></h1-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
