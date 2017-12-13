<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php $form = ActiveForm::begin();?>
	<?php echo $form->field($model,'name');?>
	<?php echo $form->field($model,'email');?>
	<div class="from-group">
	<?php echo Html::submitButton('submit',['class'=>'btn btn-primary'])?>
	</div>
<?php ActiveForm::end();?>