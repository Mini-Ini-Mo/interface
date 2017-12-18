<?php

namespace common\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "xcpt_goods".
 *
 * @property string $goods_id
 * @property string $goods_sn
 * @property integer $user_id
 * @property string $com_id
 * @property string $type
 * @property string $goods_name
 * @property string $description
 * @property string $cate_id
 * @property string $cate_name
 * @property string $brand
 * @property integer $brand_id
 * @property integer $spec_qty
 * @property string $spec_name_1
 * @property string $spec_name_2
 * @property integer $if_show
 * @property integer $closed
 * @property string $close_reason
 * @property string $add_time
 * @property string $last_update
 * @property string $default_spec
 * @property string $default_image
 * @property integer $recommended
 * @property string $cate_id_1
 * @property string $cate_id_2
 * @property string $cate_id_3
 * @property string $cate_id_4
 * @property string $price
 * @property string $market_price
 * @property integer $state
 * @property integer $stock
 * @property integer $min_buy
 * @property string $cad_file
 * @property string $bim_file
 * @property string $3d_file
 * @property string $region_1
 * @property string $region_2
 * @property integer $sale_region_type
 * @property string $sale_region_descr
 * @property string $danwei
 * @property integer $goods_type
 * @property string $discountl
 * @property string $discounth
 * @property string $period
 * @property integer $is_green
 */
class Goods extends \yii\db\ActiveRecord
{
	public static $closed_mean = ['审核中','审核通过','审核未通过'];
	
	/**
	* view 输出图片
	* @date: 2017年12月18日 下午3:09:47
	* @author: cuik
	*/
	public static function formatImg($data){
		$str = '';
		if($data){
			foreach($data as $d){
				$str .= Html::image(Yii::app()->params['img_old'].$d->thumbnail,'',['width'=>170]);
			}
			return $str;
		}
	}
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xcpt_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'brand', 'brand_id', 'market_price', 'stock'], 'required'],
            [['user_id', 'com_id', 'cate_id', 'brand_id', 'spec_qty', 'if_show', 'closed', 'add_time', 'last_update', 'default_spec', 'recommended', 'cate_id_1', 'cate_id_2', 'cate_id_3', 'cate_id_4', 'state', 'stock', 'min_buy', 'region_1', 'region_2', 'sale_region_type', 'goods_type', 'is_green'], 'integer'],
            [['description'], 'string'],
            [['price', 'market_price'], 'number'],
            [['goods_sn', 'goods_name', 'cate_name', 'close_reason', 'default_image', 'cad_file', 'bim_file', '3d_file', 'sale_region_descr', 'discountl', 'discounth', 'period'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 10],
            [['brand'], 'string', 'max' => 100],
            [['spec_name_1', 'spec_name_2'], 'string', 'max' => 60],
            [['danwei'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'goods_sn' => 'Goods Sn',
            'user_id' => 'User ID',
            'com_id' => 'Com ID',
            'type' => 'Type',
            'goods_name' => '商品',
            'description' => '描述',
            'cate_id' => 'Cate ID',
            'cate_name' => '品类',
            'brand' => '品牌',
            'brand_id' => 'Brand ID',
            'spec_qty' => 'Spec Qty',
            'spec_name_1' => 'Spec Name 1',
            'spec_name_2' => 'Spec Name 2',
            'if_show' => 'If Show',
            'closed' => '状态',
            'add_time' => '上传时间',
            'last_update' => 'Last Update',
            'default_spec' => 'Default Spec',
            'default_image' => 'Default Image',
            'recommended' => 'Recommended',
            'cate_id_1' => 'Cate Id 1',
            'cate_id_2' => 'Cate Id 2',
            'cate_id_3' => 'Cate Id 3',
            'cate_id_4' => 'Cate Id 4',
            'price' => 'Price',
            'market_price' => 'Market Price',
            'state' => 'State',
            'stock' => 'Stock',
            'min_buy' => 'Min Buy',
            'cad_file' => 'Cad File',
            'bim_file' => 'Bim File',
            '3d_file' => '3d File',
            'region_1' => 'Region 1',
            'region_2' => 'Region 2',
            'sale_region_type' => 'Sale Region Type',
            'sale_region_descr' => 'Sale Region Descr',
            'danwei' => '单位',
            'goods_type' => 'Goods Type',
            'discountl' => 'Discountl',
            'discounth' => 'Discounth',
            'period' => 'Period',
            'is_green' => 'Is Green',
        ];
    }
}
