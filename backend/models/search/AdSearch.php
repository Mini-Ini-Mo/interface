<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ad;

/**
 * AdSearch represents the model behind the search form about `common\models\Ad`.
 */
class AdSearch extends Ad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ad_id', 'start_time', 'end_time', 'click_count', 'enabled', 'add_time', 'position_id', 'sort_order'], 'integer'],
            [['ad_name', 'ad_link', 'ad_img'], 'safe'],
            [['ad_price'], 'number'],
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
        $query = Ad::find();

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
            'ad_id' => $this->ad_id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'click_count' => $this->click_count,
            'ad_price' => $this->ad_price,
            'enabled' => $this->enabled,
            'add_time' => $this->add_time,
            'position_id' => $this->position_id,
            'sort_order' => $this->sort_order,
        ]);

        $query->andFilterWhere(['like', 'ad_name', $this->ad_name])
            ->andFilterWhere(['like', 'ad_link', $this->ad_link])
            ->andFilterWhere(['like', 'ad_img', $this->ad_img]);

        return $dataProvider;
    }
}
