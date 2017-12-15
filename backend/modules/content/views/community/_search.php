<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\CommunitySearh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="community-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'qid') ?>

    <?= $form->field($model, 'shequ_name') ?>

    <?= $form->field($model, 'shequ_index_face') ?>

    <?= $form->field($model, 'shequ_pinyin') ?>

    <?= $form->field($model, 'enable') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'cqid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
