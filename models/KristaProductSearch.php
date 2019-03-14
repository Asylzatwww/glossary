<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KristaProduct;

/**
 * KristaProductSearch represents the model behind the search form of `app\models\KristaProduct`.
 */
class KristaProductSearch extends KristaProduct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'comm_num', 'allow_comm', 'allow_main', 'approve', 'fixed', 'allow_br', 'price', 'old_price', 'stock', 'label', 'yadirect', 'yamarket', 'rst', 'warranty', 'sort_index', 'bonus_price', 'sale_percent', 'site_id', 'production_status'], 'integer'],
            [['autor', 'date', 'short_story', 'full_story', 'xfields', 'title', 'title_seo', 'vendor', 'country', 'descr', 'keywords', 'category', 'alt_name', 'symbol', 'tags', 'metatitle', 'order_date', 'related', 'action_url', 'yamarket_descr', 'filters', 'specifications', 'specifications_parsed', 'brand', 'collection', 'sizes', 'art', 'weight', 'youtube_video', 'components'], 'safe'],
            [['cost_price'], 'number'],
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
        $query = KristaProduct::find();

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
            'date' => $this->date,
            'comm_num' => $this->comm_num,
            'allow_comm' => $this->allow_comm,
            'allow_main' => $this->allow_main,
            'approve' => $this->approve,
            'fixed' => $this->fixed,
            'allow_br' => $this->allow_br,
            'order_date' => $this->order_date,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'stock' => $this->stock,
            'label' => $this->label,
            'yadirect' => $this->yadirect,
            'yamarket' => $this->yamarket,
            'rst' => $this->rst,
            'warranty' => $this->warranty,
            'sort_index' => $this->sort_index,
            'bonus_price' => $this->bonus_price,
            'sale_percent' => $this->sale_percent,
            'site_id' => $this->site_id,
            'cost_price' => $this->cost_price,
            'production_status' => $this->production_status,
        ]);

        $query->andFilterWhere(['like', 'autor', $this->autor])
            ->andFilterWhere(['like', 'short_story', $this->short_story])
            ->andFilterWhere(['like', 'full_story', $this->full_story])
            ->andFilterWhere(['like', 'xfields', $this->xfields])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'title_seo', $this->title_seo])
            ->andFilterWhere(['like', 'vendor', $this->vendor])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'alt_name', $this->alt_name])
            ->andFilterWhere(['like', 'symbol', $this->symbol])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'metatitle', $this->metatitle])
            ->andFilterWhere(['like', 'related', $this->related])
            ->andFilterWhere(['like', 'action_url', $this->action_url])
            ->andFilterWhere(['like', 'yamarket_descr', $this->yamarket_descr])
            ->andFilterWhere(['like', 'filters', $this->filters])
            ->andFilterWhere(['like', 'specifications', $this->specifications])
            ->andFilterWhere(['like', 'specifications_parsed', $this->specifications_parsed])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'collection', $this->collection])
            ->andFilterWhere(['like', 'sizes', $this->sizes])
            ->andFilterWhere(['like', 'art', $this->art])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'youtube_video', $this->youtube_video])
            ->andFilterWhere(['like', 'components', $this->components]);

        return $dataProvider;
    }
}
