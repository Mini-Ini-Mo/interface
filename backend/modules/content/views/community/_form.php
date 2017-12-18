<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\content\assets\AutocompleteAsset;
use yii\helpers\Json;
use common\models\Community;

/* @var $this yii\web\View */
/* @var $model common\models\Community */
/* @var $form yii\widgets\ActiveForm */
AutocompleteAsset::register($this);
$opts = Json::htmlEncode([
        'community' => Community::getCommunitySource(),
]);
$this->registerJs("var _opts = $opts;");
$this->registerJs($this->render('_script.js'));
?>
<div class="community-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= Html::activeHiddenInput($model, 'cqid', ['id' => 'cqid']); ?>

    <?= $form->field($model, 'shequ_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shequ_index_face')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shequ_pinyin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enable')->dropDownList(Community::$enable_mean) ?>

    <?= $form->field($model, 'sort')->input('number') ?>

    <?= $form->field($model, 'cqname')->textInput(['id'=>'cqname']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
