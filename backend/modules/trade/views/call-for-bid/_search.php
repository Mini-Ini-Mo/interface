<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\CallForBidSearh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-for-bid-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'project_id') ?>

    <?= $form->field($model, 'project_sn') ?>

    <?= $form->field($model, 'shop_id') ?>

    <?= $form->field($model, 'shop_name') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'shequ_id') ?>

    <?php // echo $form->field($model, 'lxr') ?>

    <?php // echo $form->field($model, 'lxr_p') ?>

    <?php // echo $form->field($model, 'project_name') ?>

    <?php // echo $form->field($model, 'default_logo') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'region_name') ?>

    <?php // echo $form->field($model, 'area_id') ?>

    <?php // echo $form->field($model, 'area_name') ?>

    <?php // echo $form->field($model, 'area_addr') ?>

    <?php // echo $form->field($model, 'cate_id1') ?>

    <?php // echo $form->field($model, 'cate_id2') ?>

    <?php // echo $form->field($model, 'cate_id') ?>

    <?php // echo $form->field($model, 'cate_name') ?>

    <?php // echo $form->field($model, 'projects') ?>

    <?php // echo $form->field($model, 'requirement') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'baoming_time') ?>

    <?php // echo $form->field($model, 'toubiao_time') ?>

    <?php // echo $form->field($model, 'kaibiao_time') ?>

    <?php // echo $form->field($model, 'add_time') ?>

    <?php // echo $form->field($model, 'zb_status') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tj_status') ?>

    <?php // echo $form->field($model, 'if_pass') ?>

    <?php // echo $form->field($model, 'if_close') ?>

    <?php // echo $form->field($model, 'xm_name') ?>

    <?php // echo $form->field($model, 'pm_id') ?>

    <?php // echo $form->field($model, 'open_way') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'pricing') ?>

    <?php // echo $form->field($model, 'enable') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
