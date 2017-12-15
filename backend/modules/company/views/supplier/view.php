<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Company;

/* @var $this yii\web\View */
/* @var $model common\models\Company */

$this->title = $model->com_name;
$this->params['breadcrumbs'][] = ['label' => '供应商列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-view">

    <!--h1><?= Html::encode($this->title) ?></h1-->

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->com_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->com_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'com_id',
            'group_id',
            'shequ_id',
            'com_name',
            //'com_short_name',
            //'com_sn',
            //'estate_type',
            //'com_bank',
            //'com_bank_num',
            'com_zczj',
            //'com_fddbr',
            //'com_fddbr_dh',
            //'com_zzjgdm',
            //'com_gsglh',
            //'com_yyzzdm',
            //'com_yyzz_pic',
            //'com_zzjgdmz_pic',
            //'com_sssq',
            //'com_rzdw',
            //'com_post_code',
            //'com_mode',
            //'com_level',
            //'com_main_production',
            //'com_main_industry',
            //'com_main_industry2',
            //'com_main_industry3',
            'com_staff_amount_level',
            'com_turnover_level',
            'com_type',
            //'com_zbdjg',
            //'com_phone',
            //'com_fax',
            //'com_address_code',
            //'com_address_text',
            'com_instructions:ntext',
            'create_time:datetime',
            //'com_info_status',
            //'com_money',
            //'cgrade',
            //'region_id',
            //'region_name',
            //'domain',
            //'owner_name',
            //'owner_id',
            //'owner_card',
            //'credit_value',
            //'praise_rate',
            //'close_reason',
            //'end_time:datetime',
            //'sort_order',
            //'recommended',
            'com_verify_status',
            //'com_logo',
            //'added_s_id',
            //'home_page',
            'com_email:email',
            //'com_dsdjz',
            //'com_dsdjh',
            //'com_zjndjzc',
            //'com_zjndjzcfzl',
            //'com_fdctdkfdj',
            //'com_fdckfzzzs',
            //'com_gdbj',
            //'com_jsncwbb',
            //'com_source',
            //'com_main_category',
            //'com_reject_reason',
            //'has_store',
            'store_level',
            //'if_pop_window',
            'contact_man',
            'contact_man_tel',
            //'prov_id',
            //'city_id',
            //'dist_id',
            //'prov_name',
            //'city_name',
            //'dist_name',
            'tag_ids',
        ],
    ]) ?>

</div>
