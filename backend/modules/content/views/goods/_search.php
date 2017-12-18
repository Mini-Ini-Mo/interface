<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\GoodsSearh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'goods_id') ?>

    <?= $form->field($model, 'goods_sn') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'com_id') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'goods_name') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'cate_id') ?>

    <?php // echo $form->field($model, 'cate_name') ?>

    <?php // echo $form->field($model, 'brand') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'spec_qty') ?>

    <?php // echo $form->field($model, 'spec_name_1') ?>

    <?php // echo $form->field($model, 'spec_name_2') ?>

    <?php // echo $form->field($model, 'if_show') ?>

    <?php // echo $form->field($model, 'closed') ?>

    <?php // echo $form->field($model, 'close_reason') ?>

    <?php // echo $form->field($model, 'add_time') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'default_spec') ?>

    <?php // echo $form->field($model, 'default_image') ?>

    <?php // echo $form->field($model, 'recommended') ?>

    <?php // echo $form->field($model, 'cate_id_1') ?>

    <?php // echo $form->field($model, 'cate_id_2') ?>

    <?php // echo $form->field($model, 'cate_id_3') ?>

    <?php // echo $form->field($model, 'cate_id_4') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'market_price') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'min_buy') ?>

    <?php // echo $form->field($model, 'cad_file') ?>

    <?php // echo $form->field($model, 'bim_file') ?>

    <?php // echo $form->field($model, '3d_file') ?>

    <?php // echo $form->field($model, 'region_1') ?>

    <?php // echo $form->field($model, 'region_2') ?>

    <?php // echo $form->field($model, 'sale_region_type') ?>

    <?php // echo $form->field($model, 'sale_region_descr') ?>

    <?php // echo $form->field($model, 'danwei') ?>

    <?php // echo $form->field($model, 'goods_type') ?>

    <?php // echo $form->field($model, 'discountl') ?>

    <?php // echo $form->field($model, 'discounth') ?>

    <?php // echo $form->field($model, 'period') ?>

    <?php // echo $form->field($model, 'is_green') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
