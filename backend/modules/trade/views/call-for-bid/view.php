<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use common\models\CallForBidJoin;

/* @var $this yii\web\View */
/* @var $model common\models\CallForBid */

$this->title = $model->project_id;
$this->params['breadcrumbs'][] = ['label' => 'Call For Bids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-for-bid-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->project_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->project_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <ul class="nav nav-tabs" role="tablist">
    	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">招标公告</a></li>
    	<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">报名情况</a></li>
    	<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">资审结果</a></li>
    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">招标文件</a></li>
    	<li role="presentation"><a href="#hb" aria-controls="hb" role="tab" data-toggle="tab">回标文件</a></li>
    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">评标</a></li>
    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">中标结果</a></li>
  	</ul>
  	
  	<?php $query = CallForBidJoin::find()->where(['project_id'=>$model->project_id]);?>
	    <?php $joinDataProvider = new ActiveDataProvider([
	    		'query'=>$query,		
	])?>
  	<div class="tab-content">
  		<br>
	    <div role="tabpanel" class="tab-pane active" id="home">
	    	<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            'shop_id',
		            'cate_name',
		            'baoming_time:datetime',
		        	'zb_status',
		        ],
		    ]) ?>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="profile">
	    	<?= GridView::widget([
		        'dataProvider' => $joinDataProvider,
		        'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],
		        		'shop_id',
		        		'lianxiren',
		        		'lianxiren_p',
		        		'describe',
		        		'baoming_time',
		        ],
		    ]); ?>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="messages">
	    	<?= GridView::widget([
		        'dataProvider' => $joinDataProvider,
		        'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],
		        		'shop_id',
		        		'lianxiren',
		        		'lianxiren_p',
		        		'baoming_time',
		        		'status'
		        ],
		    ]); ?>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="settings">
	    	<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            'price',
		            'toubiao_time:datetime',
		            'kaibiao_time',
		         
		        ],
		    ]) ?>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="hb">
	    	<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            'shop_id',
		            'cate_name',
		            'baoming_time:datetime',
		        	'zb_status',
		        ],
		    ]) ?>
	    </div>
	  </div>

</div>
