<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Goods;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goods_sn')->textInput(['maxlength' => true,'readOnly'=>true]) ?>
    
    <?= $form->field($model, 'goods_name')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6,'readOnly'=>true]) ?>

    <?= $form->field($model, 'cate_id')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'cate_name')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'default_image')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'market_price')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'goods_type')->textInput(['readOnly'=>true]) ?>

    <?= $form->field($model, 'discountl')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'discounth')->textInput(['maxlength' => true,'readOnly'=>true]) ?>

    <?= $form->field($model, 'period')->textInput(['maxlength' => true,'readOnly'=>true]) ?>
    
    <?= $form->field($model, 'closed')->dropDownList(Goods::$closed_mean,['prompt'=>'请选择']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
