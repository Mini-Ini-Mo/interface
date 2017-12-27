<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Category;

/**
 * CategorySearh represents the model behind the search form about `common\models\Category`.
 */
class CategorySearh extends Category
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gcate_id', 'com_id', 'parent_id', 'sort_order', 'if_show'], 'integer'],
            [['gcate_name', 'unit'], 'safe'],
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
        $query = Category::find();

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
            'gcate_id' => $this->gcate_id,
            'com_id' => $this->com_id,
            'parent_id' => $this->parent_id,
            'sort_order' => $this->sort_order,
            'if_show' => $this->if_show,
        ]);

        $query->andFilterWhere(['like', 'gcate_name', $this->gcate_name])
            ->andFilterWhere(['like', 'unit', $this->unit]);

        return $dataProvider;
    }
}
