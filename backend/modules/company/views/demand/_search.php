<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\CompanySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'com_id') ?>

    <?= $form->field($model, 'group_id') ?>

    <?= $form->field($model, 'shequ_id') ?>

    <?= $form->field($model, 'com_name') ?>

    <?= $form->field($model, 'com_short_name') ?>

    <?php // echo $form->field($model, 'com_sn') ?>

    <?php // echo $form->field($model, 'estate_type') ?>

    <?php // echo $form->field($model, 'com_bank') ?>

    <?php // echo $form->field($model, 'com_bank_num') ?>

    <?php // echo $form->field($model, 'com_zczj') ?>

    <?php // echo $form->field($model, 'com_fddbr') ?>

    <?php // echo $form->field($model, 'com_fddbr_dh') ?>

    <?php // echo $form->field($model, 'com_zzjgdm') ?>

    <?php // echo $form->field($model, 'com_gsglh') ?>

    <?php // echo $form->field($model, 'com_yyzzdm') ?>

    <?php // echo $form->field($model, 'com_yyzz_pic') ?>

    <?php // echo $form->field($model, 'com_zzjgdmz_pic') ?>

    <?php // echo $form->field($model, 'com_sssq') ?>

    <?php // echo $form->field($model, 'com_rzdw') ?>

    <?php // echo $form->field($model, 'com_post_code') ?>

    <?php // echo $form->field($model, 'com_mode') ?>

    <?php // echo $form->field($model, 'com_level') ?>

    <?php // echo $form->field($model, 'com_main_production') ?>

    <?php // echo $form->field($model, 'com_main_industry') ?>

    <?php // echo $form->field($model, 'com_main_industry2') ?>

    <?php // echo $form->field($model, 'com_main_industry3') ?>

    <?php // echo $form->field($model, 'com_staff_amount_level') ?>

    <?php // echo $form->field($model, 'com_turnover_level') ?>

    <?php // echo $form->field($model, 'com_type') ?>

    <?php // echo $form->field($model, 'com_zbdjg') ?>

    <?php // echo $form->field($model, 'com_phone') ?>

    <?php // echo $form->field($model, 'com_fax') ?>

    <?php // echo $form->field($model, 'com_address_code') ?>

    <?php // echo $form->field($model, 'com_address_text') ?>

    <?php // echo $form->field($model, 'com_instructions') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'com_info_status') ?>

    <?php // echo $form->field($model, 'com_money') ?>

    <?php // echo $form->field($model, 'cgrade') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'region_name') ?>

    <?php // echo $form->field($model, 'domain') ?>

    <?php // echo $form->field($model, 'owner_name') ?>

    <?php // echo $form->field($model, 'owner_id') ?>

    <?php // echo $form->field($model, 'owner_card') ?>

    <?php // echo $form->field($model, 'credit_value') ?>

    <?php // echo $form->field($model, 'praise_rate') ?>

    <?php // echo $form->field($model, 'close_reason') ?>

    <?php // echo $form->field($model, 'end_time') ?>

    <?php // echo $form->field($model, 'sort_order') ?>

    <?php // echo $form->field($model, 'recommended') ?>

    <?php // echo $form->field($model, 'com_verify_status') ?>

    <?php // echo $form->field($model, 'com_logo') ?>

    <?php // echo $form->field($model, 'added_s_id') ?>

    <?php // echo $form->field($model, 'home_page') ?>

    <?php // echo $form->field($model, 'com_email') ?>

    <?php // echo $form->field($model, 'com_dsdjz') ?>

    <?php // echo $form->field($model, 'com_dsdjh') ?>

    <?php // echo $form->field($model, 'com_zjndjzc') ?>

    <?php // echo $form->field($model, 'com_zjndjzcfzl') ?>

    <?php // echo $form->field($model, 'com_fdctdkfdj') ?>

    <?php // echo $form->field($model, 'com_fdckfzzzs') ?>

    <?php // echo $form->field($model, 'com_gdbj') ?>

    <?php // echo $form->field($model, 'com_jsncwbb') ?>

    <?php // echo $form->field($model, 'com_source') ?>

    <?php // echo $form->field($model, 'com_main_category') ?>

    <?php // echo $form->field($model, 'com_reject_reason') ?>

    <?php // echo $form->field($model, 'has_store') ?>

    <?php // echo $form->field($model, 'store_level') ?>

    <?php // echo $form->field($model, 'if_pop_window') ?>

    <?php // echo $form->field($model, 'contact_man') ?>

    <?php // echo $form->field($model, 'contact_man_tel') ?>

    <?php // echo $form->field($model, 'prov_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'dist_id') ?>

    <?php // echo $form->field($model, 'prov_name') ?>

    <?php // echo $form->field($model, 'city_name') ?>

    <?php // echo $form->field($model, 'dist_name') ?>

    <?php // echo $form->field($model, 'tag_ids') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
