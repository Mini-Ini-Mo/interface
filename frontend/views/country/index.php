<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\jui\DatePicker;
?>

<h1>Countries</h1>
<ul>
	<?php foreach($countries as $country):?>
		<li>
			<?php echo Html::encode("{$country->name} ({$country->code})");?>
			<?php echo $country->population;?>
		</li>
	<?php endforeach;?>
	<li>
		<?php echo DatePicker::widget(['name' => 'date']) ?>
	</li>
</ul>
<?php echo LinkPager::widget(['pagination'=>$pagination]);?>