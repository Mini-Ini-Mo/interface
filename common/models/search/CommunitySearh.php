<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Community;

/**
 * CommunitySearh represents the model behind the search form about `common\models\Community`.
 */
class CommunitySearh extends Community
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qid', 'enable', 'sort', 'cqid'], 'integer'],
            [['shequ_name', 'shequ_index_face', 'shequ_pinyin'], 'safe'],
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
        $query = Community::find();

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
            'qid' => $this->qid,
            'enable' => $this->enable,
            'sort' => $this->sort,
            'cqid' => $this->cqid,
        ]);

        $query->andFilterWhere(['like', 'shequ_name', $this->shequ_name])
            ->andFilterWhere(['like', 'shequ_index_face', $this->shequ_index_face])
            ->andFilterWhere(['like', 'shequ_pinyin', $this->shequ_pinyin]);

        return $dataProvider;
    }
}
