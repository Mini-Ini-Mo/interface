<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Ad;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;
use common\models\AdPosition;

/* @var $this yii\web\View */
/* @var $model common\models\Ad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'ad_name')->textInput(['maxlength' => true,'required'=>true]) ?>

    <?= $form->field($model, 'ad_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_img')->fileInput(['required'=>true]) ?>

    <?= $form->field($model, 'click_count')->input('number',['value'=>0]) ?>

    <?= $form->field($model, 'ad_price')->input('number',['value'=>0]) ?>

    <?= $form->field($model, 'enabled')->dropDownList(Ad::$enabled_mean) ?>

    <?= $form->field($model, 'add_time')->hiddenInput(['value'=>time()])->label(false) ?>

    <?= $form->field($model, 'position_id')->dropDownList(ArrayHelper::map(AdPosition::find()->all(),'position_id','position_name'),['prompt'=>'请选择','required'=>true]) ?>

    <?= $form->field($model, 'sort_order')->input('number',['value'=>0]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
