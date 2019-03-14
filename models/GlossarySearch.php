<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Glossary;

/**
 * GlossarySearch represents the model behind the search form of `app\models\Glossary`.
 */
class GlossarySearch extends Glossary
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'money_code_id', 'count', 'count_id'], 'integer'],
            [['title', 'description', 'prize'], 'safe'],
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
        $query = Glossary::find();

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
            'money_code_id' => $this->money_code_id,
            'count' => $this->count,
            'count_id' => $this->count_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'prize', $this->prize]);

        return $dataProvider;
    }
}
