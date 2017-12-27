<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CustomGoods;

/**
 * CustomGoodsSearch represents the model behind the search form about `common\models\CustomGoods`.
 */
class CustomGoodsSearch extends CustomGoods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'cate_id1', 'cate_id2', 'cate_id', 'brand_id', 'recommend_to_pc', 'recommend_to_app', 'status', 'user_id', 'sort', 'is_delete', 'pc_view_num', 'app_view_num', 'total_view_num', 'add_time'], 'integer'],
            [['goods_name', 'goods_sn', 'default_image', 'thumb_path', 'cate_name', 'brand_name', 'unit', 'hangye_price', 'goods_model', 'ad_words', 'number_low', 'price_desc', 'duibiao', 'yufukuan', 'daohuokuan', 'wanchengkuan', 'jiesuankuan', 'baozhengjin', 'params', 'fuwushang', 'zhanluekehu', 'description'], 'safe'],
            [['market_price'], 'number'],
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
        $query = CustomGoods::find();

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
            'cate_id1' => $this->cate_id1,
            'cate_id2' => $this->cate_id2,
            'cate_id' => $this->cate_id,
            'brand_id' => $this->brand_id,
            'market_price' => $this->market_price,
            'recommend_to_pc' => $this->recommend_to_pc,
            'recommend_to_app' => $this->recommend_to_app,
            'status' => $this->status,
            'user_id' => $this->user_id,
            'sort' => $this->sort,
            'is_delete' => $this->is_delete,
            'pc_view_num' => $this->pc_view_num,
            'app_view_num' => $this->app_view_num,
            'total_view_num' => $this->total_view_num,
            'add_time' => $this->add_time,
        ]);

        $query->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'goods_sn', $this->goods_sn])
            ->andFilterWhere(['like', 'default_image', $this->default_image])
            ->andFilterWhere(['like', 'thumb_path', $this->thumb_path])
            ->andFilterWhere(['like', 'cate_name', $this->cate_name])
            ->andFilterWhere(['like', 'brand_name', $this->brand_name])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'hangye_price', $this->hangye_price])
            ->andFilterWhere(['like', 'goods_model', $this->goods_model])
            ->andFilterWhere(['like', 'ad_words', $this->ad_words])
            ->andFilterWhere(['like', 'number_low', $this->number_low])
            ->andFilterWhere(['like', 'price_desc', $this->price_desc])
            ->andFilterWhere(['like', 'duibiao', $this->duibiao])
            ->andFilterWhere(['like', 'yufukuan', $this->yufukuan])
            ->andFilterWhere(['like', 'daohuokuan', $this->daohuokuan])
            ->andFilterWhere(['like', 'wanchengkuan', $this->wanchengkuan])
            ->andFilterWhere(['like', 'jiesuankuan', $this->jiesuankuan])
            ->andFilterWhere(['like', 'baozhengjin', $this->baozhengjin])
            ->andFilterWhere(['like', 'params', $this->params])
            ->andFilterWhere(['like', 'fuwushang', $this->fuwushang])
            ->andFilterWhere(['like', 'zhanluekehu', $this->zhanluekehu])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
