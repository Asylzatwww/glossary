<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GlossaryCountHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Glossary Count Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glossary-count-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Glossary Count History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'action',
            'location',
            'count_before',
            'count_now',
            //'date',
            //'glossary_count_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
