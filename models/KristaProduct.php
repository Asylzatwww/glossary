<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "krista_product".
 *
 * @property int $id
 * @property string $autor
 * @property string $date
 * @property string $short_story
 * @property string $full_story
 * @property string $xfields
 * @property string $title
 * @property string $title_seo
 * @property string $vendor
 * @property string $country
 * @property string $descr
 * @property string $keywords
 * @property string $category
 * @property string $alt_name
 * @property int $comm_num
 * @property int $allow_comm
 * @property int $allow_main
 * @property int $approve
 * @property int $fixed
 * @property int $allow_br
 * @property string $symbol
 * @property string $tags
 * @property string $metatitle
 * @property string $order_date
 * @property int $price
 * @property int $old_price
 * @property int $stock
 * @property string $related
 * @property int $label
 * @property string $action_url
 * @property int $yadirect
 * @property int $yamarket
 * @property string $yamarket_descr
 * @property int $rst
 * @property int $warranty
 * @property int $sort_index
 * @property string $filters
 * @property int $bonus_price
 * @property int $sale_percent
 * @property string $specifications
 * @property string $specifications_parsed
 * @property int $site_id
 * @property string $brand
 * @property string $collection
 * @property string $sizes
 * @property string $art
 * @property string $weight
 * @property string $youtube_video
 * @property string $components
 * @property double $cost_price
 * @property int $production_status
 */
class KristaProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'krista_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'order_date'], 'safe'],
            [['short_story', 'full_story', 'xfields', 'keywords', 'metatitle', 'order_date', 'price', 'old_price', 'related', 'filters', 'specifications', 'specifications_parsed', 'components'], 'required'],
            [['short_story', 'full_story', 'xfields', 'keywords', 'related', 'filters', 'specifications', 'specifications_parsed', 'components'], 'string'],
            [['comm_num', 'allow_comm', 'allow_main', 'approve', 'fixed', 'allow_br', 'price', 'old_price', 'stock', 'label', 'yadirect', 'yamarket', 'rst', 'warranty', 'sort_index', 'bonus_price', 'sale_percent', 'site_id', 'production_status'], 'integer'],
            [['cost_price'], 'number'],
            [['autor'], 'string', 'max' => 40],
            [['title', 'title_seo', 'tags', 'metatitle', 'action_url', 'art', 'youtube_video'], 'string', 'max' => 255],
            [['vendor', 'country'], 'string', 'max' => 100],
            [['descr', 'category', 'alt_name', 'brand', 'collection', 'sizes'], 'string', 'max' => 200],
            [['symbol'], 'string', 'max' => 3],
            [['yamarket_descr'], 'string', 'max' => 512],
            [['weight'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'autor' => 'Autor',
            'date' => 'Date',
            'short_story' => 'Short Story',
            'full_story' => 'Full Story',
            'xfields' => 'Xfields',
            'title' => 'Title',
            'title_seo' => 'Title Seo',
            'vendor' => 'Vendor',
            'country' => 'Country',
            'descr' => 'Descr',
            'keywords' => 'Keywords',
            'category' => 'Category',
            'alt_name' => 'Alt Name',
            'comm_num' => 'Comm Num',
            'allow_comm' => 'Allow Comm',
            'allow_main' => 'Allow Main',
            'approve' => 'Approve',
            'fixed' => 'Fixed',
            'allow_br' => 'Allow Br',
            'symbol' => 'Symbol',
            'tags' => 'Tags',
            'metatitle' => 'Metatitle',
            'order_date' => 'Order Date',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'stock' => 'Stock',
            'related' => 'Related',
            'label' => 'Label',
            'action_url' => 'Action Url',
            'yadirect' => 'Yadirect',
            'yamarket' => 'Yamarket',
            'yamarket_descr' => 'Yamarket Descr',
            'rst' => 'Rst',
            'warranty' => 'Warranty',
            'sort_index' => 'Sort Index',
            'filters' => 'Filters',
            'bonus_price' => 'Bonus Price',
            'sale_percent' => 'Sale Percent',
            'specifications' => 'Specifications',
            'specifications_parsed' => 'Specifications Parsed',
            'site_id' => 'Site ID',
            'brand' => 'Brand',
            'collection' => 'Collection',
            'sizes' => 'Sizes',
            'art' => 'Art',
            'weight' => 'Weight',
            'youtube_video' => 'Youtube Video',
            'components' => 'Components',
            'cost_price' => 'Cost Price',
            'production_status' => 'Production Status',
        ];
    }
}
