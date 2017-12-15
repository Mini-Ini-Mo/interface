<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Company */

$this->title = '更新: ' . $model->com_name;
$this->params['breadcrumbs'][] = ['label' => '地产商列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->com_name, 'url' => ['view', 'id' => $model->com_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-update">

    <!--h1><?= Html::encode($this->title) ?></h1-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
