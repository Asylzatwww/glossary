<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlossaryCountHistory;

/**
 * GlossaryCountHistorySearch represents the model behind the search form of `app\models\GlossaryCountHistory`.
 */
class GlossaryCountHistorySearch extends GlossaryCountHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'action', 'location', 'count_before', 'count_now', 'date', 'glossary_count_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = GlossaryCountHistory::find();

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
            'id' => $this->id,
            'action' => $this->action,
            'location' => $this->location,
            'count_before' => $this->count_before,
            'count_now' => $this->count_now,
            'date' => $this->date,
            'glossary_count_id' => $this->glossary_count_id,
        ]);

        return $dataProvider;
    }
}
