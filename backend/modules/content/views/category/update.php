<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = '更新品类: ' . $model->gcate_name;
$this->params['breadcrumbs'][] = ['label' => '品类列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gcate_name, 'url' => ['view', 'id' => $model->gcate_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
