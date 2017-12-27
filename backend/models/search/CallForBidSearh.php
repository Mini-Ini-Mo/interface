<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CallForBid;

/**
 * CallForBidSearh represents the model behind the search form about `common\models\CallForBid`.
 */
class CallForBidSearh extends CallForBid
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'shop_id', 'user_id', 'shequ_id', 'region_id', 'area_id', 'cate_id1', 'cate_id2', 'cate_id', 'baoming_time', 'toubiao_time', 'kaibiao_time', 'add_time', 'zb_status', 'status', 'tj_status', 'if_pass', 'if_close', 'pm_id', 'open_way', 'source'], 'integer'],
            [['project_sn', 'shop_name', 'lxr', 'lxr_p', 'project_name', 'default_logo', 'region_name', 'area_name', 'area_addr', 'cate_name', 'projects', 'requirement', 'description', 'xm_name', 'enable'], 'safe'],
            [['price', 'pricing'], 'number'],
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
        $query = CallForBid::find();

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
            'project_id' => $this->project_id,
            'shop_id' => $this->shop_id,
            'user_id' => $this->user_id,
            'shequ_id' => $this->shequ_id,
            'price' => $this->price,
            'region_id' => $this->region_id,
            'area_id' => $this->area_id,
            'cate_id1' => $this->cate_id1,
            'cate_id2' => $this->cate_id2,
            'cate_id' => $this->cate_id,
            'baoming_time' => $this->baoming_time,
            'toubiao_time' => $this->toubiao_time,
            'kaibiao_time' => $this->kaibiao_time,
            'add_time' => $this->add_time,
            'zb_status' => $this->zb_status,
            'status' => $this->status,
            'tj_status' => $this->tj_status,
            'if_pass' => $this->if_pass,
            'if_close' => $this->if_close,
            'pm_id' => $this->pm_id,
            'open_way' => $this->open_way,
            'source' => $this->source = 0,
            'pricing' => $this->pricing,
        ]);

        $query->andFilterWhere(['like', 'project_sn', $this->project_sn])
            ->andFilterWhere(['like', 'shop_name', $this->shop_name])
            ->andFilterWhere(['like', 'lxr', $this->lxr])
            ->andFilterWhere(['like', 'lxr_p', $this->lxr_p])
            ->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'default_logo', $this->default_logo])
            ->andFilterWhere(['like', 'region_name', $this->region_name])
            ->andFilterWhere(['like', 'area_name', $this->area_name])
            ->andFilterWhere(['like', 'area_addr', $this->area_addr])
            ->andFilterWhere(['like', 'cate_name', $this->cate_name])
            ->andFilterWhere(['like', 'projects', $this->projects])
            ->andFilterWhere(['like', 'requirement', $this->requirement])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'xm_name', $this->xm_name])
            ->andFilterWhere(['like', 'enable', $this->enable]);

        return $dataProvider;
    }
}
