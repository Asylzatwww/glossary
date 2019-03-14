<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KristaProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Krista Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="krista-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Krista Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'autor',
            'date',
            'short_story:ntext',
            'full_story:ntext',
            //'xfields:ntext',
            //'title',
            //'title_seo',
            //'vendor',
            //'country',
            //'descr',
            //'keywords:ntext',
            //'category',
            //'alt_name',
            //'comm_num',
            //'allow_comm',
            //'allow_main',
            //'approve',
            //'fixed',
            //'allow_br',
            //'symbol',
            //'tags',
            //'metatitle',
            //'order_date',
            //'price',
            //'old_price',
            //'stock',
            //'related:ntext',
            //'label',
            //'action_url:url',
            //'yadirect',
            //'yamarket',
            //'yamarket_descr',
            //'rst',
            //'warranty',
            //'sort_index',
            //'filters:ntext',
            //'bonus_price',
            //'sale_percent',
            //'specifications:ntext',
            //'specifications_parsed:ntext',
            //'site_id',
            //'brand',
            //'collection',
            //'sizes',
            //'art',
            //'weight',
            //'youtube_video',
            //'components:ntext',
            //'cost_price',
            //'production_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
