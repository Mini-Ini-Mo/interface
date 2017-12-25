<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Community */

$this->title = $model->shequ_name;
$this->params['breadcrumbs'][] = ['label' => '社区列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="community-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->qid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->qid], [
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
            'qid',
            'shequ_name',
        	['attribute'=> 'shequ_index_face','format'=>'raw','value'=>Html::img(\Yii::$app->params['img'].'/upload/'.$model->shequ_index_face,['width'=>'200px'])],
            'shequ_pinyin',
            'enable',
            'sort',
            'cqid',
        ],
    ]) ?>

</div>
