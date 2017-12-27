<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\CustomGoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="custom-goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'goods_id') ?>

    <?= $form->field($model, 'goods_name') ?>

    <?= $form->field($model, 'goods_sn') ?>

    <?= $form->field($model, 'default_image') ?>

    <?= $form->field($model, 'thumb_path') ?>

    <?php // echo $form->field($model, 'cate_id1') ?>

    <?php // echo $form->field($model, 'cate_id2') ?>

    <?php // echo $form->field($model, 'cate_id') ?>

    <?php // echo $form->field($model, 'cate_name') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'brand_name') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'market_price') ?>

    <?php // echo $form->field($model, 'hangye_price') ?>

    <?php // echo $form->field($model, 'goods_model') ?>

    <?php // echo $form->field($model, 'ad_words') ?>

    <?php // echo $form->field($model, 'number_low') ?>

    <?php // echo $form->field($model, 'price_desc') ?>

    <?php // echo $form->field($model, 'duibiao') ?>

    <?php // echo $form->field($model, 'yufukuan') ?>

    <?php // echo $form->field($model, 'daohuokuan') ?>

    <?php // echo $form->field($model, 'wanchengkuan') ?>

    <?php // echo $form->field($model, 'jiesuankuan') ?>

    <?php // echo $form->field($model, 'baozhengjin') ?>

    <?php // echo $form->field($model, 'params') ?>

    <?php // echo $form->field($model, 'fuwushang') ?>

    <?php // echo $form->field($model, 'zhanluekehu') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'recommend_to_pc') ?>

    <?php // echo $form->field($model, 'recommend_to_app') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'is_delete') ?>

    <?php // echo $form->field($model, 'pc_view_num') ?>

    <?php // echo $form->field($model, 'app_view_num') ?>

    <?php // echo $form->field($model, 'total_view_num') ?>

    <?php // echo $form->field($model, 'add_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
