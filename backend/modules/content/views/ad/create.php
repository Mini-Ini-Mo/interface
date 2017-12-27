<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ad */

$this->title = '添加广告';
$this->params['breadcrumbs'][] = ['label' => '广告列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
