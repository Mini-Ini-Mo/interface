<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UploadFile */

$this->title = '修改文件: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '文件列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="upload-file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
