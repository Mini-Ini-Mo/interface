<?php 
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<h1><?php echo Html::encode($hello_str);?></h1>
<h1><?php echo HtmlPurifier::process($hello_str);?></h1>