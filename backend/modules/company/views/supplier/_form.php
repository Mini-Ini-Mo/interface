<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Community;
use common\models\Company;

/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'group_id')->dropDownList([5=>'地产商',7=>'供应商'],['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'shequ_id')->dropDownList(ArrayHelper::map(\common\models\Community::find()->where(['enable'=>1])->all(),'qid','shequ_name'),['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'com_name')->textInput(['maxlength' => true]) ?>

    <!-- ?= $form->field($model, 'com_short_name')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_sn')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'estate_type')->textInput() ?-->

    <!--?= $form->field($model, 'com_bank')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_bank_num')->textInput(['maxlength' => true]) ?-->

    <?= $form->field($model, 'com_zczj')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'com_fddbr')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_fddbr_dh')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_zzjgdm')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_gsglh')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_yyzzdm')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_yyzz_pic')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_zzjgdmz_pic')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_sssq')->textInput() ?-->

    <!--?= $form->field($model, 'com_rzdw')->textInput(['maxlength' => true]) ?-->

    <?= $form->field($model, 'com_post_code')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'com_mode')->textInput() ?-->

    <!--?= $form->field($model, 'com_level')->textInput() ?-->

    <!--?= $form->field($model, 'com_main_production')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_main_industry')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_main_industry2')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_main_industry3')->textInput(['maxlength' => true]) ?-->

    <?= $form->field($model, 'com_staff_amount_level')->dropDownList(Company::$staff_amount_arr) ?>

    <?= $form->field($model, 'com_turnover_level')->dropDownList(Company::$com_turnover_arr) ?>

    <?= $form->field($model, 'com_type')->dropDownList(Company::$com_type_arr) ?>

    <!--?= $form->field($model, 'com_zbdjg')->textInput() ?-->

    <!--?= $form->field($model, 'com_phone')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_fax')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_address_code')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_address_text')->textInput(['maxlength' => true]) ?-->

    <?= $form->field($model, 'com_instructions')->textarea(['rows' => 6]) ?>

    <!--?= $form->field($model, 'create_time')->textInput() ?-->

    <!--?= $form->field($model, 'com_info_status')->textInput() ?-->

    <!--?= $form->field($model, 'com_money')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'cgrade')->textInput() ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'region_name')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'domain')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'owner_name')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'owner_id')->textInput() ?>

    <!--?= $form->field($model, 'owner_card')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'credit_value')->textInput() ?-->

    <!--?= $form->field($model, 'praise_rate')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'close_reason')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'end_time')->textInput() ?-->

    <!--?= $form->field($model, 'sort_order')->textInput() ?-->

    <!--?= $form->field($model, 'recommended')->textInput() ?-->

    <?= $form->field($model, 'com_verify_status')->dropDownList(['新申请','审核通过','未通过','已付费','企业关闭']) ?>

    <!--?= $form->field($model, 'com_logo')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'added_s_id')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'home_page')->textInput(['maxlength' => true]) ?-->

    <?= $form->field($model, 'com_email')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'com_dsdjz')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_dsdjh')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_zjndjzc')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_zjndjzcfzl')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_fdctdkfdj')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_fdckfzzzs')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_gdbj')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_jsncwbb')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_source')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_main_category')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'com_reject_reason')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'has_store')->textInput() ?-->

    <?= $form->field($model, 'store_level')->dropDownList([0=>'无店铺',10=>'标准店',20=>'旗舰店']) ?>

    <!--?= $form->field($model, 'if_pop_window')->textInput() ?-->

    <?= $form->field($model, 'contact_man')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_man_tel')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'prov_id')->textInput() ?-->

    <!--?= $form->field($model, 'city_id')->textInput() ?-->

    <!--?= $form->field($model, 'dist_id')->textInput() ?-->

    <!--?= $form->field($model, 'prov_name')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'dist_name')->textInput(['maxlength' => true]) ?-->

    <?= $form->field($model, 'tag_ids')->checkboxList(Company::getTags(7)) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
