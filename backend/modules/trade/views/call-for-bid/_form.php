<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CallForBid */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-for-bid-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop_id')->textInput() ?>

    <?= $form->field($model, 'shop_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'shequ_id')->textInput() ?>

    <?= $form->field($model, 'lxr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lxr_p')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'region_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_id')->textInput() ?>

    <?= $form->field($model, 'area_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cate_id1')->textInput() ?>

    <?= $form->field($model, 'cate_id2')->textInput() ?>

    <?= $form->field($model, 'cate_id')->textInput() ?>

    <?= $form->field($model, 'cate_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'projects')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'requirement')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'baoming_time')->textInput() ?>

    <?= $form->field($model, 'toubiao_time')->textInput() ?>

    <?= $form->field($model, 'kaibiao_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_time')->textInput() ?>

    <?= $form->field($model, 'zb_status')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'tj_status')->textInput() ?>

    <?= $form->field($model, 'if_pass')->textInput() ?>

    <?= $form->field($model, 'if_close')->textInput() ?>

    <?= $form->field($model, 'xm_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pm_id')->textInput() ?>

    <?= $form->field($model, 'open_way')->textInput() ?>

    <?= $form->field($model, 'source')->textInput() ?>

    <?= $form->field($model, 'pricing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enable')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
