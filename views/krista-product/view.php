<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KristaProduct */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Krista Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="krista-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'autor',
            'date',
            'short_story:ntext',
            'full_story:ntext',
            'xfields:ntext',
            'title',
            'title_seo',
            'vendor',
            'country',
            'descr',
            'keywords:ntext',
            'category',
            'alt_name',
            'comm_num',
            'allow_comm',
            'allow_main',
            'approve',
            'fixed',
            'allow_br',
            'symbol',
            'tags',
            'metatitle',
            'order_date',
            'price',
            'old_price',
            'stock',
            'related:ntext',
            'label',
            'action_url:url',
            'yadirect',
            'yamarket',
            'yamarket_descr',
            'rst',
            'warranty',
            'sort_index',
            'filters:ntext',
            'bonus_price',
            'sale_percent',
            'specifications:ntext',
            'specifications_parsed:ntext',
            'site_id',
            'brand',
            'collection',
            'sizes',
            'art',
            'weight',
            'youtube_video',
            'components:ntext',
            'cost_price',
            'production_status',
        ],
    ]) ?>

</div>
