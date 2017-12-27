<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomGoods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="custom-goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goods_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thumb_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cate_id1')->textInput() ?>

    <?= $form->field($model, 'cate_id2')->textInput() ?>

    <?= $form->field($model, 'cate_id')->textInput() ?>

    <?= $form->field($model, 'cate_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

    <?= $form->field($model, 'brand_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'market_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hangye_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_words')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_low')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duibiao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yufukuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daohuokuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wanchengkuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jiesuankuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baozhengjin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'params')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fuwushang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'zhanluekehu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recommend_to_pc')->textInput() ?>

    <?= $form->field($model, 'recommend_to_app')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'is_delete')->textInput() ?>

    <?= $form->field($model, 'pc_view_num')->textInput() ?>

    <?= $form->field($model, 'app_view_num')->textInput() ?>

    <?= $form->field($model, 'total_view_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
