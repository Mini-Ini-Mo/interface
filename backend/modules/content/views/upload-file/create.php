<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UploadFile */

$this->title = '上传文件';
$this->params['breadcrumbs'][] = ['label' => '文件列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
