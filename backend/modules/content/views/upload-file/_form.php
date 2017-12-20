<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\UploadFile;

/* @var $this yii\web\View */
/* @var $model common\models\UploadFile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="upload-file-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'status')->dropDownList(UploadFile::$status_mean,['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'category')->dropDownList(UploadFile::$category_mean,['prompt'=>'请选择']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
