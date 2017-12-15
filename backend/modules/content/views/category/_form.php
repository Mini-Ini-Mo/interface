<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\content\assets\AutocompleteAsset;
use yii\helpers\Json;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
AutocompleteAsset::register($this);
$opts = Json::htmlEncode([
		'category' => Category::getCategorySource(),
]);
$this->registerJs("var _opts = $opts;");
$this->registerJs($this->render('_script.js'));
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>
	<?= Html::activeHiddenInput($model, 'parent_id', ['id' => 'parent_id']); ?>
	
    <?= $form->field($model, 'gcate_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_name')->textInput(['maxlength' => true,'id' => 'parent_name']) ?>

    <?= $form->field($model, 'sort_order')->input('number') ?>

    <?= $form->field($model, 'if_show')->dropDownList(['不显示','显示']) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
