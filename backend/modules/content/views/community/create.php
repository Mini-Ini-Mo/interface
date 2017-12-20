<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Community */

$this->title = '添加社区';
$this->params['breadcrumbs'][] = ['label' => '添加社区', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="community-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
