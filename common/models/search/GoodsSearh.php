<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Goods;

/**
 * GoodsSearh represents the model behind the search form about `common\models\Goods`.
 */
class GoodsSearh extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'user_id', 'com_id', 'cate_id', 'brand_id', 'spec_qty', 'if_show', 'closed', 'add_time', 'last_update', 'default_spec', 'recommended', 'cate_id_1', 'cate_id_2', 'cate_id_3', 'cate_id_4', 'state', 'stock', 'min_buy', 'region_1', 'region_2', 'sale_region_type', 'goods_type', 'is_green'], 'integer'],
            [['goods_sn', 'type', 'goods_name', 'description', 'cate_name', 'brand', 'spec_name_1', 'spec_name_2', 'close_reason', 'default_image', 'cad_file', 'bim_file', '3d_file', 'sale_region_descr', 'danwei', 'discountl', 'discounth', 'period'], 'safe'],
            [['price', 'market_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Goods::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'goods_id' => $this->goods_id,
            'user_id' => $this->user_id,
            'com_id' => $this->com_id,
            'cate_id' => $this->cate_id,
            'brand_id' => $this->brand_id,
            'spec_qty' => $this->spec_qty,
            'if_show' => $this->if_show,
            'closed' => $this->closed,
            'add_time' => $this->add_time,
            'last_update' => $this->last_update,
            'default_spec' => $this->default_spec,
            'recommended' => $this->recommended,
            'cate_id_1' => $this->cate_id_1,
            'cate_id_2' => $this->cate_id_2,
            'cate_id_3' => $this->cate_id_3,
            'cate_id_4' => $this->cate_id_4,
            'price' => $this->price,
            'market_price' => $this->market_price,
            'state' => $this->state,
            'stock' => $this->stock,
            'min_buy' => $this->min_buy,
            'region_1' => $this->region_1,
            'region_2' => $this->region_2,
            'sale_region_type' => $this->sale_region_type,
            'goods_type' => $this->goods_type,
            'is_green' => $this->is_green,
        ]);

        $query->andFilterWhere(['like', 'goods_sn', $this->goods_sn])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'cate_name', $this->cate_name])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'spec_name_1', $this->spec_name_1])
            ->andFilterWhere(['like', 'spec_name_2', $this->spec_name_2])
            ->andFilterWhere(['like', 'close_reason', $this->close_reason])
            ->andFilterWhere(['like', 'default_image', $this->default_image])
            ->andFilterWhere(['like', 'cad_file', $this->cad_file])
            ->andFilterWhere(['like', 'bim_file', $this->bim_file])
            //->andFilterWhere(['like', '3d_file', $this->3d_file])
            ->andFilterWhere(['like', 'sale_region_descr', $this->sale_region_descr])
            ->andFilterWhere(['like', 'danwei', $this->danwei])
            ->andFilterWhere(['like', 'discountl', $this->discountl])
            ->andFilterWhere(['like', 'discounth', $this->discounth])
            ->andFilterWhere(['like', 'period', $this->period]);

        return $dataProvider;
    }
}
