<?php
namespace api\modules\user\controllers;

use yii;
use api\behaviors\verify\VerifyControl;
use yii\filters\VerbFilter;
use api\models\User;
use yii\web\Request;
use yii\web\Controller;

class LoginController extends Controller
{
	public $enableCsrfValidation=false;
	
	public function behaviors()
	{
		return [
			'verify'=>[
				'class'=>VerifyControl::className(),
				'only'=>['index'],
				'rules'=>[
					[
						['submit','required'],
						['submit','number'],
					]	
				]
			],
			'verbs'=>[
				'class'=>VerbFilter::className(),
				'actions'=>[
					'index'=>['post'],	
				],					
			],
		];
	}
	
	public function actionIndex()
	{
		$request = Yii::$app->request;
		$submit = $request->get('submit',0);
		if($submit != "1"){
			$this->outputJson(100,'请求参数错误');
		}
		
		$username = $request->post('username');
		$pwd = $request->post('pwd');
		$model = new User();
		$data = $model->login($username,$pwd);
		
		if(!$data){
			$this->outputJson(102,'用户名或密码错误');
		}
		Yii::$app->session['user_token'] = md5($model::PWD_KEY.$_SERVER['REQUEST_TIME'].$data['uid']);
		$this->outputJson(0,'登录成功',$data);
		
		exit;
	}
	
	/**
	 * 输出json
	 * @date: 2017年9月12日 下午3:43:26
	 * @author: cuik
	 */
	public function outputJson($code,$msg=false,$data=null)
	{
		//$msg = $msg?$msg:\Yii::$app->params[$code];
		echo json_encode([
				'code'=>$code,
				'msg'=>$msg,
				'data'=>$data,
		]);
		exit;
	}
}