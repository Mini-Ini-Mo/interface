<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\UploadFile;

/* @var $this yii\web\View */
/* @var $model common\models\UploadFile */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '文件列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-file-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            ['attribute'=> 'file','format'=>'raw','value'=>Html::img(\Yii::$app->params['img_old'].'/upload/'.$model->file,['width'=>'200px'])],
            ['attribute'=>'status','value'=>function($model){
				return UploadFile::$status_mean[$model->status];
			}],
            ['attribute'=>'category','value'=>function($model){
				return UploadFile::$category_mean[$model->category];
			}],
            'type',
            'create_time:datetime',
        ],
    ]) ?>

</div>
