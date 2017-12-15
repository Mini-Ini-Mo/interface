<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Company;

/**
 * CompanySearch represents the model behind the search form about `common\models\Company`.
 */
class CompanySearch extends Company
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_id', 'group_id', 'shequ_id', 'estate_type', 'com_sssq', 'com_mode', 'com_level', 'com_staff_amount_level', 'com_turnover_level', 'com_type', 'com_zbdjg', 'create_time', 'com_info_status', 'cgrade', 'region_id', 'owner_id', 'credit_value', 'end_time', 'sort_order', 'recommended', 'com_verify_status', 'has_store', 'store_level', 'if_pop_window', 'prov_id', 'city_id', 'dist_id'], 'integer'],
            [['com_name', 'com_short_name', 'com_sn', 'com_bank', 'com_bank_num', 'com_zczj', 'com_fddbr', 'com_fddbr_dh', 'com_zzjgdm', 'com_gsglh', 'com_yyzzdm', 'com_yyzz_pic', 'com_zzjgdmz_pic', 'com_rzdw', 'com_post_code', 'com_main_production', 'com_main_industry', 'com_main_industry2', 'com_main_industry3', 'com_phone', 'com_fax', 'com_address_code', 'com_address_text', 'com_instructions', 'region_name', 'domain', 'owner_name', 'owner_card', 'close_reason', 'com_logo', 'added_s_id', 'home_page', 'com_email', 'com_dsdjz', 'com_dsdjh', 'com_zjndjzc', 'com_zjndjzcfzl', 'com_fdctdkfdj', 'com_fdckfzzzs', 'com_gdbj', 'com_jsncwbb', 'com_source', 'com_main_category', 'com_reject_reason', 'contact_man', 'contact_man_tel', 'prov_name', 'city_name', 'dist_name', 'tag_ids'], 'safe'],
            [['com_money', 'praise_rate'], 'number'],
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
        $query = Company::find();

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
            'com_id' => $this->com_id,
            'group_id' => $this->group_id,
            'shequ_id' => $this->shequ_id,
            'estate_type' => $this->estate_type,
            'com_sssq' => $this->com_sssq,
            'com_mode' => $this->com_mode,
            'com_level' => $this->com_level,
            'com_staff_amount_level' => $this->com_staff_amount_level,
            'com_turnover_level' => $this->com_turnover_level,
            'com_type' => $this->com_type,
            'com_zbdjg' => $this->com_zbdjg,
            'create_time' => $this->create_time,
            'com_info_status' => $this->com_info_status,
            'com_money' => $this->com_money,
            'cgrade' => $this->cgrade,
            'region_id' => $this->region_id,
            'owner_id' => $this->owner_id,
            'credit_value' => $this->credit_value,
            'praise_rate' => $this->praise_rate,
            'end_time' => $this->end_time,
            'sort_order' => $this->sort_order,
            'recommended' => $this->recommended,
            'com_verify_status' => $this->com_verify_status,
            'has_store' => $this->has_store,
            'store_level' => $this->store_level,
            'if_pop_window' => $this->if_pop_window,
            'prov_id' => $this->prov_id,
            'city_id' => $this->city_id,
            'dist_id' => $this->dist_id,
        ]);

        $query->andFilterWhere(['like', 'com_name', $this->com_name])
            ->andFilterWhere(['like', 'com_short_name', $this->com_short_name])
            ->andFilterWhere(['like', 'com_sn', $this->com_sn])
            ->andFilterWhere(['like', 'com_bank', $this->com_bank])
            ->andFilterWhere(['like', 'com_bank_num', $this->com_bank_num])
            ->andFilterWhere(['like', 'com_zczj', $this->com_zczj])
            ->andFilterWhere(['like', 'com_fddbr', $this->com_fddbr])
            ->andFilterWhere(['like', 'com_fddbr_dh', $this->com_fddbr_dh])
            ->andFilterWhere(['like', 'com_zzjgdm', $this->com_zzjgdm])
            ->andFilterWhere(['like', 'com_gsglh', $this->com_gsglh])
            ->andFilterWhere(['like', 'com_yyzzdm', $this->com_yyzzdm])
            ->andFilterWhere(['like', 'com_yyzz_pic', $this->com_yyzz_pic])
            ->andFilterWhere(['like', 'com_zzjgdmz_pic', $this->com_zzjgdmz_pic])
            ->andFilterWhere(['like', 'com_rzdw', $this->com_rzdw])
            ->andFilterWhere(['like', 'com_post_code', $this->com_post_code])
            ->andFilterWhere(['like', 'com_main_production', $this->com_main_production])
            ->andFilterWhere(['like', 'com_main_industry', $this->com_main_industry])
            ->andFilterWhere(['like', 'com_main_industry2', $this->com_main_industry2])
            ->andFilterWhere(['like', 'com_main_industry3', $this->com_main_industry3])
            ->andFilterWhere(['like', 'com_phone', $this->com_phone])
            ->andFilterWhere(['like', 'com_fax', $this->com_fax])
            ->andFilterWhere(['like', 'com_address_code', $this->com_address_code])
            ->andFilterWhere(['like', 'com_address_text', $this->com_address_text])
            ->andFilterWhere(['like', 'com_instructions', $this->com_instructions])
            ->andFilterWhere(['like', 'region_name', $this->region_name])
            ->andFilterWhere(['like', 'domain', $this->domain])
            ->andFilterWhere(['like', 'owner_name', $this->owner_name])
            ->andFilterWhere(['like', 'owner_card', $this->owner_card])
            ->andFilterWhere(['like', 'close_reason', $this->close_reason])
            ->andFilterWhere(['like', 'com_logo', $this->com_logo])
            ->andFilterWhere(['like', 'added_s_id', $this->added_s_id])
            ->andFilterWhere(['like', 'home_page', $this->home_page])
            ->andFilterWhere(['like', 'com_email', $this->com_email])
            ->andFilterWhere(['like', 'com_dsdjz', $this->com_dsdjz])
            ->andFilterWhere(['like', 'com_dsdjh', $this->com_dsdjh])
            ->andFilterWhere(['like', 'com_zjndjzc', $this->com_zjndjzc])
            ->andFilterWhere(['like', 'com_zjndjzcfzl', $this->com_zjndjzcfzl])
            ->andFilterWhere(['like', 'com_fdctdkfdj', $this->com_fdctdkfdj])
            ->andFilterWhere(['like', 'com_fdckfzzzs', $this->com_fdckfzzzs])
            ->andFilterWhere(['like', 'com_gdbj', $this->com_gdbj])
            ->andFilterWhere(['like', 'com_jsncwbb', $this->com_jsncwbb])
            ->andFilterWhere(['like', 'com_source', $this->com_source])
            ->andFilterWhere(['like', 'com_main_category', $this->com_main_category])
            ->andFilterWhere(['like', 'com_reject_reason', $this->com_reject_reason])
            ->andFilterWhere(['like', 'contact_man', $this->contact_man])
            ->andFilterWhere(['like', 'contact_man_tel', $this->contact_man_tel])
            ->andFilterWhere(['like', 'prov_name', $this->prov_name])
            ->andFilterWhere(['like', 'city_name', $this->city_name])
            ->andFilterWhere(['like', 'dist_name', $this->dist_name])
            ->andFilterWhere(['like', 'tag_ids', $this->tag_ids]);

        return $dataProvider;
    }
}
