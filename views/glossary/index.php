<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GlossarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


use yii\widgets\ListView;
use yii\data\ActiveDataProvider;


$this->title = 'Glossaries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glossary-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Glossary', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <!--?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'prize',
            'money_code_id',
            //'count',
            //'count_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?-->
    <div class="container">

    <?php

    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
    ]);

    ?>

    </div>

</div>
