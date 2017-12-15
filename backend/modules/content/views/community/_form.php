<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Community */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="community-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shequ_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shequ_index_face')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shequ_pinyin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enable')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'cqid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
